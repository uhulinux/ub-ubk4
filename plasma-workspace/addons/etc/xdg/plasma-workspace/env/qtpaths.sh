if [ -z "${QT_PLUGIN_PATH}" ]; then
	export QT_PLUGIN_PATH=$QT5DIR/plugins
fi

if [ -z "${QML2_IMPORT_PATH}" ]; then
	export QML2_IMPORT_PATH=$QT5DIR/qml
fi
