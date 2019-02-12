#!/bin/bash

echo "\n"
git clone https://github.com/brahndun/drive_3380.git /home/git/drive_3380 && echo "CLONED\n"

grep -Eo "1[0-9]{9}" /home/git/drive_3380/.git/logs/refs/heads/master > /home/git/timestamps/gitcommit

chmod 777 /home/git/timestamps/gitcommit

remote=$(cat /home/git/timestamps/gitcommit)
slocal=$(cat /home/git/timestamps/lastcommit)

if [[ $remote -gt $slocal ]]; then
    rsync -r /home/git/drive_3380/* /var/www/html/ && echo "FILES MOVED\n"
    rm -rf /home/git/drive_3380 && echo "GIT REPO DELETED\n"
    rm -rf /var/www/html/README.md /var/www/html/.git && echo "EXCESS FILES DELETED"
    rm -rf /home/git/timestamps/lastcommit
    date +%s > /home/git/timestamps/lastcommit
    chmod 777 /home/git/timestamps/lastcommit
    rm -rf /home/git/timestamps/gitcommit
else
    read -p "Overwrite files: " option
    if [[ $option=="y" ]]; then
        rsync -r /home/git/drive_3380/* /var/www/html/ && echo "FILES MOVED\n"
        rm -rf /home/git/drive_3380 && echo "GIT REPO DELETED\n"
        rm -rf /var/www/html/README.md /var/www/html/.git && echo "EXCESS FILES DELETED"
        date +%s > /home/git/timestamps/lastcommit
        chmod 777 /home/git/timestamps/lastcommit
        rm -rf /home/git/timestamps/gitcommit
    else
        echo "Nothing to be overwritten. Deleting repo."
        rm -rf /home/git/drive_3380 && echo "GIT REPO DELETED\n"
        rm -rf /var/www/html/README.md /var/www/html/.git && echo "EXCESS FILES DELETED"
        rm -rf /home/git/timestamps/gitcommit
    fi
fi