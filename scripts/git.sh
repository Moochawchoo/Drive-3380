#!/bin/bash

echo "\n"
git clone https://github.com/brahndun/drive_3380.git /home/rz/drive_3380 && echo "CLONED\n"

mv -u /home/rz/drive_3380/* /var/www/html/ && echo "FILES MOVED\n"

rm -rf /home/rz/drive_3380 && echo "GIT REPO DELETED\n"

rm -rf README.md .git && echo "EXCESS FILES DELETED"