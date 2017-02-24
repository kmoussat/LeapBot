#!/usr/bin/env python
import RPi.GPIO as GPIO
import time
import sys

GPIO.setwarnings(False)

GPIO.setmode(GPIO.BOARD)

GPIO.setup(16, GPIO.OUT)

p = GPIO.PWM(16, 50)

p.start(2.5)

try:
        while True:
		p.ChangeDutyCycle(2.5)  # turn towards 90 degree
		time.sleep(1) # sleep 1 second
		sys.exit()	#p.ChangeDutyCycle(2.5)  # turn towards 0 degree
		#time.sleep(1) # sleep 1 second
		#p.ChangeDutyCycle(12.5) # turn towards 180 degree
                #time.sleep(1) # sleep 1 second 
except KeyboardInterrupt:
	p.stop()
        GPIO.cleanup()
