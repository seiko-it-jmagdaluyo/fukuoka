@echo off
    	powershell.exe -ExecutionPolicy Bypass -Command "& C:\Users\j.magdaluyo\Downloads\optimizilla\migrate-data.ps1"

    	if %ERRORLEVEL% == 0 GOTO exit
	if %ERRORLEVEL% == 1 GOTO PSrunfailed

:PSrunfailed
    	echo Unable to run Powershell file.
    	pause

:exit
	echo success
	pause
