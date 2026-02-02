#!/bin/bash
# vi: ts=8 sw=4 sts=4 et filetype=sh
#
# SPDX-License-Identifier: GPL-3.0-or-later

sudo chown -R $USER:www-data .

find . -type f -exec chmod 660 {} \;
find . -type d -exec chmod 750 {} \;

find storage/   -type d -exec chmod 770 {} \;
find database/  -type d -exec chmod 770 {} \;
find bootstrap/ -type d -exec chmod 770 {} \;

chmod 770 artisan scripts scripts/* 
