#!/bin/bash
#
# Quick script to crop out the center region of screenshots.
# Original Redo Backup author used cropped thumbnails, not scaled images.
# Rescuezilla continues this. Doesn't matter if this script is
# also hosted on GitHub Pages.
#
# Screenshots may vary in input size.
#
# Depends: ImageMagick's convert utility.

# Target width/height
TWIDTH=120
THEIGHT=120

# Loop over all input images
for INDEX in 1 2 3 4 5 6 7 8
do
  # Get width/height of input images
  W=`identify ./$INDEX.png | cut -f 3 -d " " | sed s/x.*//` #width
  H=`identify ./$INDEX.png| cut -f 3 -d " " | sed s/.*x//` #height
  echo "$INDEX.png had size $W x $H"
  
  # Calculating crop  to ensure center
  OFFSETW=$(( $W / 2 - $TWIDTH / 2 ))
  OFFSETH=$(( $H / 2 - $THEIGHT / 2 ))
  echo "$INDEX.png offsets $OFFSETW x $OFFSETH"

  convert -crop "$TWIDTH"x"$THEIGHT"+"$OFFSETW"+"$OFFSETH" $INDEX.png $INDEX-thumb.png
done
