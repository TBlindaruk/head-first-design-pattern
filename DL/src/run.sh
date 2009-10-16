#!/bin/bash
clear
echo Type the path, starting with \"headfirst\" and using forward slashes, and
echo the string \"run[className]\" for the class you wish to run.
echo For example: headfirst/adapter/ducks/runDuckTestDrive
echo
echo Or, type \"all\" to run everything.
echo
echo Shortcut: to run the gumball proxy server, type \"serverstart\".
echo Shortcut: to stop the gumball proxy server, type \"serverstop\".
echo

read -p "Command: " userInput

function headfirst_adapter_ducks_runDuckTestDrive() {
	clear
	echo Running headfirst/adapter/ducks/runDuckTestDrive
	cd headfirst/adapter/ducks
	php runDuckTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_adapter_ducks_runTurkeyTestDrive() {
	clear
	echo Running headfirst/adapter/ducks/runTurkeyTestDrive
	cd headfirst/adapter/ducks
	php runTurkeyTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_adapter_iterenum_runEI() {
	clear
	echo Running headfirst/adapter/iterenum/runEI
	cd headfirst/adapter/iterenum
	php runEI.php one two three
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_adapter_iterenum_runEnumerationIteratorTestDrive() {
	clear
	echo Running headfirst/adapter/iterenum/runEnumerationIteratorTestDrive
	cd headfirst/adapter/iterenum
	php runEnumerationIteratorTestDrive.php seven eight nine ten eleven twelve
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_adapter_iterenum_runIteratorEnumerationTestDrive() {
	clear
	echo Running headfirst/adapter/iterenum/runIteratorEnumerationTestDrive
	cd headfirst/adapter/iterenum
	php runIteratorEnumerationTestDrive.php one two three four five six
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_combining_adapter_runDuckSimulator() {
	clear
	echo Running headfirst/combining/adapter/runDuckSimulator
	cd headfirst/combining/adapter
	php runDuckSimulator.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_combining_composite_runDuckSimulator() {
	clear
	echo Running headfirst/combining/composite/runDuckSimulator
	cd headfirst/combining/composite
	php runDuckSimulator.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_combining_decorator_runDuckSimulator() {
	clear
	echo Running headfirst/combining/decorator/runDuckSimulator
	cd headfirst/combining/decorator
	php runDuckSimulator.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_combining_ducks_runDuckSimulator() {
	clear
	echo Running headfirst/combining/ducks/runDuckSimulator
	cd headfirst/combining/ducks
	php runDuckSimulator.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_combining_factory_runDuckSimulator() {
	clear
	echo Running headfirst/combining/factory/runDuckSimulator
	cd headfirst/combining/factory
	php runDuckSimulator.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_combining_observer_runDuckSimulator() {
	clear
	echo Running headfirst/combining/observer/runDuckSimulator
	cd headfirst/combining/observer
	php runDuckSimulator.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_command_party_runRemoteLoader() {
	clear
	echo Running headfirst/command/party/runRemoteLoader
	cd headfirst/command/party
	php runRemoteLoader.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_command_remote_runRemoteLoader() {
	clear
	echo Running headfirst/command/remote/runRemoteLoader
	cd headfirst/command/remote
	php runRemoteLoader.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_command_simpleremote_runRemoteControlTest() {
	clear
	echo Running headfirst/command/simpleremote/runRemoteControlTest
	cd headfirst/command/simpleremote
	php runRemoteControlTest.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_command_undo_runRemoteLoader() {
	clear
	echo Running headfirst/command/undo/runRemoteLoader
	cd headfirst/command/undo
	php runRemoteLoader.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_composite_menu_runMenuTestDrive() {
	clear
	echo Running headfirst/composite/menu/runMenuTestDrive
	cd headfirst/composite/menu
	php runMenuTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_composite_menuiterator_runMenuTestDrive() {
	clear
	echo Running headfirst/composite/menuiterator/runMenuTestDrive
	cd headfirst/composite/menuiterator
	php runMenuTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_decorator_starbuzz_runStarbuzzCoffee() {
	clear
	echo Running headfirst/decorator/starbuzz/runStarbuzzCoffee
	cd headfirst/decorator/starbuzz
	php runStarbuzzCoffee.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_facade_hometheater_runHomeTheaterTestDrive() {
	clear
	echo Running headfirst/facade/hometheater/runHomeTheaterTestDrive
	cd headfirst/facade/hometheater
	php runHomeTheaterTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_factory_pizzaaf_runPizzaTestDrive() {
	clear
	echo Running headfirst/factory/pizzaaf/runPizzaTestDrive
	cd headfirst/factory/pizzaaf
	php runPizzaTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_factory_pizzafm_runPizzaTestDrive() {
	clear
	echo Running headfirst/factory/pizzafm/runPizzaTestDrive
	cd headfirst/factory/pizzafm
	php runPizzaTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_factory_pizzas_runPizzaTestDrive() {
	clear
	echo Running headfirst/factory/pizzas/runPizzaTestDrive
	cd headfirst/factory/pizzas
	php runPizzaTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_iterator_dinermerger_runMenuTestDrive() {
	clear
	echo Running headfirst/iterator/dinermerger/runMenuTestDrive
	cd headfirst/iterator/dinermerger
	php runMenuTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_iterator_dinermergercafe_runMenuTestDrive() {
	clear
	echo Running headfirst/iterator/dinermergercafe/runMenuTestDrive
	cd headfirst/iterator/dinermergercafe
	php runMenuTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_iterator_dinermergeri_runMenuTestDrive() {
	clear
	echo Running headfirst/iterator/dinermergeri/runMenuTestDrive
	cd headfirst/iterator/dinermergeri
	php runMenuTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_observer_weather_runWeatherStation() {
	clear
	echo Running headfirst/observer/weather/runWeatherStation
	cd headfirst/observer/weather
	php runWeatherStation.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_observer_weather_runWeatherStationHeatIndex() {
	clear
	echo Running headfirst/observer/weather/runWeatherStationHeatIndex
	cd headfirst/observer/weather
	php runWeatherStationHeatIndex.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function serverstart() {
	headfirst_proxy_gumball_runGumballMachineTestDrive
}
function headfirst_proxy_gumball_runGumballMachineTestDrive() {
	clear
	echo Press Ctrl + C to stop the server or run the \"run\" script in a seperate
	echo session and use the server stop command.
	cd headfirst/proxy/gumball
	php runGumballMachineTestDrive.php localhost:10000 123
	cd ../../..
}

function serverstop() {
	headfirst_proxy_gumball_stopGumballMachineTestDrive
}
function headfirst_proxy_gumball_stopGumballMachineTestDrive() {
	clear
	cd headfirst/proxy/gumball
	php stopGumballMachineTestDrive.php localhost:10000
	cd ../../..
}

function headfirst_proxy_gumball_runGumballMonitorTestDrive() {
	clear
	echo Note: you must be running the gumball proxy server for this to work. Please
	echo "check that it's running in a seperate session before proceeding."
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	clear
	echo Running headfirst/proxy/gumball/runGumballMonitorTestDrive
	cd headfirst/proxy/gumball
	php runGumballMonitorTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_proxy_gumballmonitor_runGumballMachineTestDrive() {
	clear
	echo Running headfirst/proxy/gumballmonitor/runGumballMachineTestDrive
	cd headfirst/proxy/gumballmonitor
	php runGumballMachineTestDrive.php Seattle 112
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_proxy_javaproxy_runMatchMakingTestDrive() {
	clear
	echo Running headfirst/proxy/javaproxy/runMatchMakingTestDrive
	cd headfirst/proxy/javaproxy
	php runMatchMakingTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_singleton_chocolate_runChocolateController() {
	clear
	echo Running headfirst/singleton/chocolate/runChocolateController
	cd headfirst/singleton/chocolate
	php runChocolateController.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_singleton_classic_runSingleton() {
	clear
	echo Running headfirst/singleton/classic/runSingleton
	cd headfirst/singleton/classic
	php runSingleton.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_singleton_stat_runSingletonClient() {
	clear
	echo Running headfirst/singleton/stat/runSingletonClient
	cd headfirst/singleton/stat
	php runSingletonClient.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_singleton_subclass_runSingletonTestDrive() {
	clear
	echo Running headfirst/singleton/subclass/runSingletonTestDrive
	cd headfirst/singleton/subclass
	php runSingletonTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_state_gumball_runGumballMachineTestDrive() {
	clear
	echo Running headfirst/state/gumball/runGumballMachineTestDrive
	cd headfirst/state/gumball
	php runGumballMachineTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_state_gumballstate_runGumballMachineTestDrive() {
	clear
	echo Running headfirst/state/gumballstate/runGumballMachineTestDrive
	cd headfirst/state/gumballstate
	php runGumballMachineTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_state_gumballstatewinner_runGumballMachineTestDrive() {
	clear
	echo Running headfirst/state/gumballstatewinner/runGumballMachineTestDrive
	cd headfirst/state/gumballstatewinner
	php runGumballMachineTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_strategy_runMiniDuckSimulator() {
	clear
	echo Running headfirst/strategy/runMiniDuckSimulator
	cd headfirst/strategy
	php runMiniDuckSimulator.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../..
}

function headfirst_strategy_runMiniDuckSimulator1() {
	clear
	echo Running headfirst/strategy/runMiniDuckSimulator1
	cd headfirst/strategy
	php runMiniDuckSimulator1.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../..
}

function headfirst_templatemethod_barista_runBeverageTestDrive() {
	clear
	echo Running headfirst/templatemethod/barista/runBeverageTestDrive
	cd headfirst/templatemethod/barista
	php runBeverageTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_templatemethod_simplebarista_runBarista() {
	clear
	echo Running headfirst/templatemethod/simplebarista/runBarista
	cd headfirst/templatemethod/simplebarista
	php runBarista.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

function headfirst_templatemethod_sort_runDuckSortTestDrive() {
	clear
	echo Running headfirst/templatemethod/sort/runDuckSortTestDrive
	cd headfirst/templatemethod/sort
	php runDuckSortTestDrive.php
	echo
	read -p "Press [Enter] to continue . . ." -n 1 key
	cd ../../..
}

runList="
	headfirst_adapter_ducks_runDuckTestDrive
	headfirst_adapter_ducks_runTurkeyTestDrive
	headfirst_adapter_iterenum_runEI
	headfirst_adapter_iterenum_runEnumerationIteratorTestDrive
	headfirst_adapter_iterenum_runIteratorEnumerationTestDrive
	headfirst_combining_adapter_runDuckSimulator
	headfirst_combining_composite_runDuckSimulator
	headfirst_combining_decorator_runDuckSimulators
	headfirst_combining_ducks_runDuckSimulator
	headfirst_combining_factory_runDuckSimulator
	headfirst_combining_observer_runDuckSimulator
	headfirst_command_party_runRemoteLoader
	headfirst_command_remote_runRemoteLoader
	headfirst_command_simpleremote_runRemoteControlTest
	headfirst_command_undo_runRemoteLoader
	headfirst_composite_menu_runMenuTestDrive
	headfirst_composite_menuiterator_runMenuTestDrive
	headfirst_decorator_starbuzz_runStarbuzzCoffee
	headfirst_facade_hometheater_runHomeTheaterTestDrive
	headfirst_factory_pizzaaf_runPizzaTestDrive
	headfirst_factory_pizzafm_runPizzaTestDrive
	headfirst_factory_pizzas_runPizzaTestDrive
	headfirst_iterator_dinermerger_runMenuTestDrive
	headfirst_iterator_dinermergercafe_runMenuTestDrive
	headfirst_iterator_dinermergeri_runMenuTestDrive
	headfirst_observer_weather_runWeatherStation
	headfirst_observer_weather_runWeatherStationHeatIndex
	headfirst_proxy_gumball_runGumballMonitorTestDrive
	headfirst_proxy_gumballmonitor_runGumballMachineTestDrive
	headfirst_proxy_javaproxy_runMatchMakingTestDrive
	headfirst_singleton_chocolate_runChocolateController
	headfirst_singleton_classic_runSingleton
	headfirst_singleton_stat_runSingletonClient
	headfirst_singleton_subclass_runSingletonTestDrive
	headfirst_state_gumball_runGumballMachineTestDrive
	headfirst_state_gumballstate_runGumballMachineTestDrive
	headfirst_state_gumballstatewinner_runGumballMachineTestDrive
	headfirst_strategy_runMiniDuckSimulator
	headfirst_strategy_runMiniDuckSimulator1
	headfirst_templatemethod_barista_runBeverageTestDrive
	headfirst_templatemethod_simplebarista_runBarista
	headfirst_templatemethod_sort_runDuckSortTestDrive
"

if [ $userInput = "all" ]; then
	for command in $runList
	do
		eval $command
	done
else
	eval ${userInput////_}
fi

clear