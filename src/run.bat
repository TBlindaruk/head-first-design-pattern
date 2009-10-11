@echo off
cls
echo Type the path, starting with "headfirst" and using forward slashes, and
echo the string "run[className]" for the class you wish to run.
echo For example: headfirst/adapter/ducks/runDuckTestDrive
echo.
echo Or, type "all" to run everything.
echo.
echo Shortcut: to run the gumball proxy server, type "serverstart".
echo Shortcut: to stop the gumball proxy server, type "serverstop".
echo.
set /p userInput=Command: 
goto %userInput%

:all

:headfirst/adapter/ducks/runDuckTestDrive
cls
echo Running headfirst/adapter/ducks/runDuckTestDrive
cd headfirst\adapter\ducks
php runDuckTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/adapter/ducks/runTurkeyTestDrive
cls
echo Running headfirst/adapter/ducks/runTurkeyTestDrive
cd headfirst\adapter\ducks
php runTurkeyTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/adapter/iterenum/runEI
cls
echo Running headfirst/adapter/iterenum/runEI
cd headfirst\adapter\iterenum
php runEI.php one two three
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/adapter/iterenum/runEnumerationIteratorTestDrive
cls
echo Running headfirst/adapter/iterenum/runEnumerationIteratorTestDrive
cd headfirst\adapter\iterenum
php runEnumerationIteratorTestDrive.php seven eight nine ten eleven twelve
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/adapter/iterenum/runIteratorEnumerationTestDrive
cls
echo Running headfirst/adapter/iterenum/runIteratorEnumerationTestDrive
cd headfirst\adapter\iterenum
php runIteratorEnumerationTestDrive.php one two three four five six
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/combining/adapter/runDuckSimulator
cls
echo Running headfirst/combining/adapter/runDuckSimulator
cd headfirst\combining\adapter
php runDuckSimulator.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/combining/composite/runDuckSimulator
cls
echo Running headfirst/combining/composite/runDuckSimulator
cd headfirst\combining\composite
php runDuckSimulator.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/combining/decorator/runDuckSimulator
cls
echo Running headfirst/combining/decorator/runDuckSimulator
cd headfirst\combining\decorator
php runDuckSimulator.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/combining/ducks/runDuckSimulator
cls
echo Running headfirst/combining/ducks/runDuckSimulator
cd headfirst\combining\ducks
php runDuckSimulator.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/combining/factory/runDuckSimulator
cls
echo Running headfirst/combining/factory/runDuckSimulator
cd headfirst\combining\factory
php runDuckSimulator.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/combining/observer/runDuckSimulator
cls
echo Running headfirst/combining/observer/runDuckSimulator
cd headfirst\combining\observer
php runDuckSimulator.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/command/party/runRemoteLoader
cls
echo Running headfirst/command/party/runRemoteLoader
cd headfirst\command\party
php runRemoteLoader.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/command/remote/runRemoteLoader
cls
echo Running headfirst/command/remote/runRemoteLoader
cd headfirst\command\remote
php runRemoteLoader.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/command/simpleremote/runRemoteControlTest
cls
echo Running headfirst/command/simpleremote/runRemoteControlTest
cd headfirst\command\simpleremote
php runRemoteControlTest.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/command/undo/runRemoteLoader
cls
echo Running headfirst/command/undo/runRemoteLoader
cd headfirst\command\undo
php runRemoteLoader.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/composite/menu/runMenuTestDrive
cls
echo Running headfirst/composite/menu/runMenuTestDrive
cd headfirst\composite\menu
php runMenuTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/composite/menuiterator/runMenuTestDrive
cls
echo Running headfirst/composite/menuiterator/runMenuTestDrive
cd headfirst\composite\menuiterator
php runMenuTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/decorator/starbuzz/runStarbuzzCoffee
cls
echo Running headfirst/decorator/starbuzz/runStarbuzzCoffee
cd headfirst\decorator\starbuzz
php runStarbuzzCoffee.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/facade/hometheater/runHomeTheaterTestDrive
cls
echo Running headfirst/facade/hometheater/runHomeTheaterTestDrive
cd headfirst\facade\hometheater
php runHomeTheaterTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/factory/pizzaaf/runPizzaTestDrive
cls
echo Running headfirst/factory/pizzaaf/runPizzaTestDrive
cd headfirst\factory\pizzaaf
php runPizzaTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/factory/pizzafm/runPizzaTestDrive
cls
echo Running headfirst/factory/pizzafm/runPizzaTestDrive
cd headfirst\factory\pizzafm
php runPizzaTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/factory/pizzas/runPizzaTestDrive
cls
echo Running headfirst/factory/pizzas/runPizzaTestDrive
cd headfirst\factory\pizzas
php runPizzaTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/iterator/dinermerger/runMenuTestDrive
cls
echo Running headfirst/iterator/dinermerger/runMenuTestDrive
cd headfirst\iterator\dinermerger
php runMenuTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/iterator/dinermergercafe/runMenuTestDrive
cls
echo Running headfirst/iterator/dinermergercafe/runMenuTestDrive
cd headfirst\iterator\dinermergercafe
php runMenuTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/iterator/dinermergeri/runMenuTestDrive
cls
echo Running headfirst/iterator/dinermergeri/runMenuTestDrive
cd headfirst\iterator\dinermergeri
php runMenuTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/observer/weather/runWeatherStation
cls
echo Running headfirst/observer/weather/runWeatherStation
cd headfirst\observer\weather
php runWeatherStation.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/observer/weather/runWeatherStationHeatIndex
cls
echo Running headfirst/observer/weather/runWeatherStationHeatIndex
cd headfirst\observer\weather
php runWeatherStationHeatIndex.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end
REM skip the server start and stop sections, they have to be run in seperate window
goto headfirst/proxy/gumball/runGumballMonitorTestDrive

:serverstart
:headfirst/proxy/gumball/runGumballMachineTestDrive
cls
echo Press Ctrl + C to stop the server or run the "run" script in a seperate
echo session and use the server stop command.
cd headfirst\proxy\gumball
php runGumballMachineTestDrive.php localhost:10000 123
cd ..\..\..
goto end

:serverstop
:headfirst/proxy/gumball/stopGumballMachineTestDrive
cls
cd headfirst\proxy\gumball
php stopGumballMachineTestDrive.php localhost:10000
cd ..\..\..
goto end

:headfirst/proxy/gumball/runGumballMonitorTestDrive
cls
echo Note: you must be running the gumball proxy server for this to work. Please
echo check that it's running in a seperate session before proceeding.
echo.
pause
cls
echo Running headfirst/proxy/gumball/runGumballMonitorTestDrive
cd headfirst\proxy\gumball
php runGumballMonitorTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/proxy/gumballmonitor/runGumballMachineTestDrive
cls
echo Running headfirst/proxy/gumballmonitor/runGumballMachineTestDrive
cd headfirst\proxy\gumballmonitor
php runGumballMachineTestDrive.php Seattle 112
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/proxy/javaproxy/runMatchMakingTestDrive
cls
echo Running headfirst/proxy/javaproxy/runMatchMakingTestDrive
cd headfirst\proxy\javaproxy
php runMatchMakingTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/singleton/chocolate/runChocolateController
cls
echo Running headfirst/singleton/chocolate/runChocolateController
cd headfirst\singleton\chocolate
php runChocolateController.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/singleton/classic/runSingleton
cls
echo Running headfirst/singleton/classic/runSingleton
cd headfirst\singleton\classic
php runSingleton.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/singleton/stat/runSingletonClient
cls
echo Running headfirst/singleton/stat/runSingletonClient
cd headfirst\singleton\stat
php runSingletonClient.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/singleton/subclass/runSingletonTestDrive
cls
echo Running headfirst/singleton/subclass/runSingletonTestDrive
cd headfirst\singleton\subclass
php runSingletonTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/state/gumball/runGumballMachineTestDrive
cls
echo Running headfirst/state/gumball/runGumballMachineTestDrive
cd headfirst\state\gumball
php runGumballMachineTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/state/gumballstate/runGumballMachineTestDrive
cls
echo Running headfirst/state/gumballstate/runGumballMachineTestDrive
cd headfirst\state\gumballstate
php runGumballMachineTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/state/gumballstatewinner/runGumballMachineTestDrive
cls
echo Running headfirst/state/gumballstatewinner/runGumballMachineTestDrive
cd headfirst\state\gumballstatewinner
php runGumballMachineTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/strategy/runMiniDuckSimulator
cls
echo Running headfirst/strategy/runMiniDuckSimulator
cd headfirst\strategy
php runMiniDuckSimulator.php
echo.
pause
cd ..\..
if not %userInput%==all goto end

:headfirst/strategy/runMiniDuckSimulator1
cls
echo Running headfirst/strategy/runMiniDuckSimulator1
cd headfirst\strategy
php runMiniDuckSimulator1.php
echo.
pause
cd ..\..
if not %userInput%==all goto end

:headfirst/templatemethod/barista/runBeverageTestDrive
cls
echo Running headfirst/templatemethod/barista/runBeverageTestDrive
cd headfirst\templatemethod\barista
php runBeverageTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/templatemethod/simplebarista/runBarista
cls
echo Running headfirst/templatemethod/simplebarista/runBarista
cd headfirst\templatemethod\simplebarista
php runBarista.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:headfirst/templatemethod/sort/DuckSortTestDrive
cls
echo Running headfirst/templatemethod/sort/DuckSortTestDrive
cd headfirst\templatemethod\sort
php runDuckSortTestDrive.php
echo.
pause
cd ..\..\..
if not %userInput%==all goto end

:end
cls