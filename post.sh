if [ "$#" -eq 0 ]; then
    echo "Usage: ./post.sh <md file name> <post number>"
    exit
fi

PNUMBER=$2
PMDFILE=$1

printf -v PNUMBER "%03d" $PNUMBER # padd post number with 3 '0's
md2html --dialect=gfm $PMDFILE > $(echo /var/www/mdblog/posts/Post$PNUMBER.mhtml)

