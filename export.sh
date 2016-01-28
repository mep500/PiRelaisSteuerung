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

