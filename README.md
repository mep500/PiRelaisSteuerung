
# PiRelaisSteuerung
 hello

This project is a open source solution for controlling a four panel relais with a Raspberry Pi, Apache and PHP 
I hope i could help you, if you have any suggestions how to improve this script, just let me know.

The default language is german.

Now how this script is working:


First this is what you need:
* 1 RaspberryPi (1 or 2, it's not nessecary wich one)
* Apache2
* PHP5
* 1 4 Panel relais
* Some jumper cables
* a network connection
* a brain


How the code is working:

We assigned GPIO17 as 1, GPIO2 as 2, GPIO3 as 3 and GPIO 4 as 4

This is how you initialize the GPIOs to use them with the RasPi:

     sudo adduser www-data gpio
     sudo chmod 666 /sys/class/gpio/export 
     sudo echo "2" > /sys/class/gpio/export 
     sudo echo "3" > /sys/class/gpio/export 
     sudo echo "4" > /sys/class/gpio/export 
     sudo echo "17" > /sys/class/gpio/export 
     sudo echo "out" > /sys/class/gpio/gpio2/direction 
     sudo echo "out" > /sys/class/gpio/gpio3/direction 
     sudo echo "out" > /sys/class/gpio/gpio4/direction 
     sudo echo "out" > /sys/class/gpio/gpio17/direction  
     sudo chown www-data /sys/class/gpio/gpio2/value 
     sudo chown www-data /sys/class/gpio/gpio3/value 
     sudo chown www-data /sys/class/gpio/gpio4/value 
     sudo chown www-data /sys/class/gpio/gpio17/value 
     sudo chmod 666 /sys/class/gpio/gpio2/value 
     sudo chmod 666 /sys/class/gpio/gpio3/value 
     sudo chmod 666 /sys/class/gpio/gpio4/value                            
     sudo chmod 666 /sys/class/gpio/gpio17/value   

Now you can test the jumpers with echo "0" > /sys/class/gpio<number of GPIO>/value to turn the panel on and the same just with echo "1" to turn them back off.

Next you have to copy the files you have donwloaded to the apache directory (/var/www/html/) and relaunch the apache service.

This should be it. 


Best regards 
Alex, Lars and Raphael
