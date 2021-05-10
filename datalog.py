from sense_emu import SenseHat
import time
import urllib3

sense = SenseHat()

while True:
    
    t = sense.temperature
    h = sense.humidity
    p = sense.pressure
    http = urllib3.PoolManager()
    r = http.request("POST", "http://localhost/sense/addtotable.php?t="+str(t)+"&h="+str(h)+"&p="+str(p)).read()
    #response = urllib3.urlopen("http://localhost/sense/addtotable.php?t="+str(t)+"&h="+str(h)+"&p="+str(p)).read()
    time.sleep(2)
