#!/bin/bash

echo "\n"
git clone https://github.com/brahndun/drive_3380.git /home/rz/drive_3380 && echo "CLONED\n"

grep -Eo "1[0-9]{9}" /home/rz/drive_3380/.git/logs/refs/heads/master > /home/rz/timestamps/gitcommit

remote=$(cat /home/rz/timestamps/gitcommit)
local=$(cat /home/rz/timestamps/lastcommit)

if[[$remote -gt $local]];
    then
        rsync -r /home/rz/drive_3380/* /var/www/html/ && echo "FILES MOVED\n"
        rm -rf /home/rz/drive_3380 && echo "GIT REPO DELETED\n"
        rm -rf /var/www/html/README.md /var/www/html/.git && echo "EXCESS FILES DELETED"
    else
        echo "Overwrite files: "
        read option
            if[[$option=="y"]];
                then
                    rsync -r /home/rz/drive_3380/* /var/www/html/ && echo "FILES MOVED\n"
                    rm -rf /home/rz/drive_3380 && echo "GIT REPO DELETED\n"
                    rm -rf /var/www/html/README.md /var/www/html/.git && echo "EXCESS FILES DELETED"
                    date +%s > /home/rz/timestamps/lastcommit
                else
                    echo "Nothing to be overwritten. Deleting repo."
                    rm -rf /home/rz/drive_3380 && echo "GIT REPO DELETED\n"
                    rm -rf /var/www/html/README.md /var/www/html/.git && echo "EXCESS FILES DELETED"
            fi
fi