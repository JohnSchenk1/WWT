import time
import board
import digitalio
import hx711_gpio

# set up data structure
data = {}
data["picoID"] = ""
data["sensor"] = "Mass"
data["reading"] = ""
data["units"] = "Kg"

# setup pins
pin_OUT = digitalio.DigitalInOut(board.GP5)
pin_SCK = digitalio.DigitalInOut(board.GP6)
pin_SCK.direction = digitalio.Direction.OUTPUT

hx = HX711(pin_SCK, pin_OUT)
hx.OFFSET = 0 # -150000
hx.set_gain(128)
time.sleep(0.050)
scale = 25000.0

mass = hx.read()/scale

data["reading"] = mass
logger.log(data)