#!/usr/bin/python
# -*- coding: utf-8 -*-
# Author: liruqi@gmail.com
#
# Copyright 2015 BJW

import urllib
import urllib2

class Sync:
    def __init__(self):
        line = ['E'] * 12
        self._layout = [['E' for x in range(12)] for y in range(7)]
        self._cars = [(0,3), (0,5), (2,0), (3,0)]

        for t in self._cars:
            x, y = t
            self._layout[x][y] = 'O'

        self._layout[0][0] = 'P'
        self._layout[0][1] = 'P'
        self._layout[0][2] = 'P'
        self._layout[1][2] = 'P'
        self._layout[2][2] = 'P'
        self._layout[3][2] = 'P'
        self._layout[4] = ['P'] * 12
        self._layout[5][2] = 'P'
        self._layout[6][2] = 'P'

        self._layout[1][3] = 'P'
        self._layout[1][4] = 'P'
        self._layout[1][5] = 'P'
        self._layout[1][6] = 'P'
        self._layout[1][7] = 'P'
        self._layout[1][8] = 'P'
        self._layout[1][9] = 'P'
        self._layout[1][10] = 'P'
        self._layout[1][11] = 'P'

    def dump(self):
        print "Lot layout: "
        for row in self._layout:
            line = "".join(row)
            print line
        print self._cars
    
    def lotMap(self):
        lines = ["".join(row) for row in self._layout]
        return "X".join(lines)

    def syncToServer(self):
        # beijingxi.net/api.php?a=synclot&id=bjw
        
        url = 'http://beijingxi.net/api.php?a=synclot&id=bjw'
        values = {'map' : self.lotMap() }
        data = urllib.urlencode(values)
        req = urllib2.Request(url, data)
        response = urllib2.urlopen(req)
        print "Api response: ", response.read()
if __name__ == '__main__':
    s = Sync()
    s.dump()
    s.syncToServer()

