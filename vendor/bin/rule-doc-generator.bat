@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../symplify/rule-doc-generator/bin/rule-doc-generator
php "%BIN_TARGET%" %*
