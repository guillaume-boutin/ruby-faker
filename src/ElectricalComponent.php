<?php

namespace App\Fakers;

use Faker\Provider\Base;

class ElectricalComponent extends Base
{
    public function electricalComponentActive()
    {
        return static::randomElement(["Diode", "LED", "Rectifier", "Transistor", "JFET", "MOSFET", "Integrated Circuit", "LCD", "Cathode Ray Tube", "Vacuum Tube", "Battery", "Fuel Cell", "Power Supply"]);
    }

    public function electricalComponentPassive()
    {
        return static::randomElement(["Resistor", "Potentiometer", "Trim Pot", "Varistor", "Capacitor", "Varicap Diode", "Inductor", "Transformer", "Generator", "Motor", "Solenoid", "Magnetic Amplifier", "Speaker", "Motion Sensor", "Accelerometer", "Thermocouple", "Antenna", "Oscillator", "Breadboard"]);
    }

    public function electricalComponentElectromechanical()
    {
        return static::randomElement(["Piezoelectric device", "Crystal", "Ultrasonic Motor", "Terminal", "Socket", "Power Cord", "Toggle Switch", "Slide Switch", "DIP Switch", "Footswitch", "Keypad", "Circuit Breaker", "Fuse", "Printed Circuit Board"]);
    }
}