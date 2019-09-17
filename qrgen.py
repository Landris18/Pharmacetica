#!/usr/bin/python3

import os, sys

os.system(f"qr {sys.argv[1]} > ./pic.png")

print('http://127.0.0.1/Pharma/pic.png')
