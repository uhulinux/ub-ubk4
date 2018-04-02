;;; -*-emacs-lisp-*-
;;; ====================================================================
;;;  @Emacs-Lisp-file{
;;;     author          = "Nelson H. F. Beebe",
;;;     version         = "1.01",
;;;     date            = "11 January 2002",
;;;     time            = "06:21:40 MST",
;;;     filename        = "hoc.el",
;;;     address         = "Center for Scientific Computing
;;;                        University of Utah
;;;                        Department of Mathematics, 322 INSCC
;;;                        155 S 1400 E RM 233
;;;                        Salt Lake City, UT 84112-0090
;;;                        USA",
;;;     telephone       = "+1 801 581 5254",
;;;     FAX             = "+1 801 585 1640, +1 801 581 4148",
;;;     URL             = "http://www.math.utah.edu/~beebe",
;;;     checksum        = "23163 206 801 7139",
;;;     email           = "beebe@math.utah.edu, beebe@acm.org,
;;;                        beebe@computer.org, beebe@ieee.org
;;;                        (Internet)",
;;;     codetable       = "ISO/ASCII",
;;;     keywords        = "hoc (high-order calculator)",
;;;     supported       = "yes",
;;;     docstring       = "This is an Emacs Lisp function that augments
;;;                        c-mode to make a simple hoc-mode.
;;;
;;;                        The checksum field above contains a CRC-16
;;;                        checksum as the first value, followed by the
;;;                        equivalent of the standard UNIX wc (word
;;;                        count) utility output of lines, words, and
;;;                        characters.  This is produced by Robert
;;;                        Solovay's checksum utility.",
;;;  }
;;; ====================================================================

;;; hoc.el --- hoc (high-order calculator) editing support

;; Author: Nelson H. F. Beebe <beebe@math.utah.edu>
;; Created: 08-Dec-2001
;; Version: 1.00
;; Keywords: hoc (high-order calculator)

;; Copyright (C) 2001--2002 Free Software Foundation, Inc.

;; This file is part of GNU Emacs.

;; GNU Emacs is free software; you can redistribute it and/or modify
;; it under the terms of the GNU General Public License as published by
;; the Free Software Foundation; either version 2, or (at your option)
;; any later version.

;; GNU Emacs is distributed in the hope that it will be useful,
;; but WITHOUT ANY WARRANTY; without even the implied warranty of
;; MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
;; GNU General Public License for more details.

;; You should have received a copy of the GNU General Public License
;; along with GNU Emacs; see the file COPYING.  If not, write to
;; the Free Software Foundation, 675 Mass Ave, Cambridge, MA 02139, USA.

;;; Commentary:

;;; Change log:

;; ---------------------------------------------------------------------
;; [1.01] Fri Jan 11 06:17:49 2002
;; Add new functions hoc-printify and hoc-unprintify to help in
;; creating the help_xxx() documentation functions.
;;
;; Add provide statement so that this library can be loaded with
;; (require 'hoc).
;;
;; Add this GNU conventional comment header and copyright statement.
;;
;; ---------------------------------------------------------------------
;; [1.00] Sat Dec 8 14:32:29 MST 2001
;; Original version with function hoc-mode.
;; ---------------------------------------------------------------------

(provide 'hoc)

(defun hoc-mode ()
  "Set up for editing hoc code (a minor variation on C mode)."
  (interactive)
  (let ((empty-buffer (= (point-min) (point-max))))
    (goto-char (point-min)) ;prevent c-mode's insertion of C template file
    (if empty-buffer
        (insert "#!\n"))
    (c-mode)
    (make-local-variable 'comment-start)
    (setq comment-start "# ")
    (make-local-variable 'comment-end)
    (setq comment-end "")
    (make-local-variable 'comment-column)
    (make-local-variable 'comment-start-skip)
    (setq comment-start-skip "# *")
    (setq mode-name "hoc")
    (setq c-argdecl-indent 0
	  c-auto-newline t
	  c-basic-offset 8
	  c-brace-imaginary-offset 0
	  c-brace-offset 0
	  c-continued-statement-offset 0
	  c-indent-level 8
	  c-label-offset -8
	  case-fold-search nil	      ;case sensitive searching in hoc
	  comment-column 40)
    (goto-char (point-min)) ;prevent c-mode's possible insertion of C template file
    (if (and empty-buffer (looking-at "^#!\n"))
	(delete-char 3))
    (run-hooks 'hoc-mode-hook)
    (goto-char (point-min))
    (if empty-buffer
	(progn
	  (insert "### -*-hoc-*-\n")
	  (insert "### ====================================================================\n")
	  (insert "### \n")
	  (insert "### ")
	  (date)
	  (insert "\n")
	  (insert "### ====================================================================\n")
	  (goto-char (point-min))
	  (forward-line 2)
	  (forward-char 4)
	  (set-buffer-modified-p nil)))))

(if (string-lessp (substring emacs-version 0 2) "19") ; earlier than 19.x
    (progn
      (setq auto-mode-alist
	    (cons (cons "\\.hoc$" 'hoc-mode) auto-mode-alist))
      (autoload 'hoc-mode  "hoc"
	"Enter hoc mode." t nil))
  (progn
    (if (not (assoc "\\.hoc$" auto-mode-alist))
	(setq auto-mode-alist
	      (cons (cons "\\.hoc$" 'hoc-mode) auto-mode-alist)))
    (autoload 'hoc-mode  "hoc"
      "Enter hoc (high-order calculator) mode." t nil)))

(defun hoc-printify()
  "Convert the region, assumed to be formatted to the correct line
width, with the correct number of leading tabs, to a series of hoc
print statements.

This function should normally be applied to a single paragraph of
documentation."
  (interactive)
  (save-excursion
    (save-restriction
      (narrow-to-region (mark) (point))
      (goto-char (point-min))
      (while (search-forward "\"" nil t) ;protect embedded quotes
	(replace-match "\\\"" nil t))
      (goto-char (point-min))
      (while (< (point) (point-max))
	(progn
	  (insert "\tprint \"")
	  (while (looking-at "\t")
	    (progn
	      (delete-char 1)
	      (insert "\\t")))
	  (end-of-line)
	  (delete-horizontal-space)
	  (if (>= (1+ (point)) (point-max))
	      (insert "\\n"))
	  (insert "\\n\"")
	  (forward-line 1))))))


(defun hoc-unprintify()
  "Convert the region, assumed to consist of a series of hoc print
statements, to the text it would print if executed.

This function should normally be applied to a single paragraph of
documentation."
  (interactive)
  (save-excursion
    (save-restriction
      (narrow-to-region (mark) (point))
      (goto-char (point-min))
      (while (< (point) (point-max))
	(progn
	  (if (looking-at "\tprint \"")
	      (progn
		(delete-char 8)
		(while (looking-at "\\\\t")
		  (progn
		    (delete-char 2)
		    (insert "\t")))
		(end-of-line)
		(delete-horizontal-space)
		(backward-char 5)
		(if (looking-at "\\\\n\\\\n\"")
		    (progn
		      (delete-char 5)
		      (insert "\n"))
		  (forward-char 2)
		  (if (looking-at "\\\\n\"")
		      (delete-char 3)))
		(forward-line 1)))))
      (goto-char (point-min))
      (while (search-forward "\\\"" nil t) ;reduce protected quotes
	(replace-match "\"" nil t))
      (goto-char (point-max))
      (delete-blank-lines))))
