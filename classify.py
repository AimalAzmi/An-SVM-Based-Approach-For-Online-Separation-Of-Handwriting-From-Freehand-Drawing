# -*- coding: utf-8 -*-
"""
Created on Wed Jan 29 05:47:27 2020

@author: AIMAL
"""


import sys
# Pickle package
import pickle

filename = 'C:/Users/AIMAL/Desktop/Computer Vision Project/clf_1.sav'

# load the model from disk
clf = pickle.load(open(filename, 'rb'))

def classify(total_probability, density, h):
    if clf.predict([[total_probability, density, h]]) == 1:
        return "text"
    else:
        return "shape"
    
total_probability = sys.argv[1]
density = sys.argv[2]
h = sys.argv[3]

print(classify(total_probability, density, h))
