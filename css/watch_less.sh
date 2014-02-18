#!/bin/bash
# Requires watchr: https://github.com/mynyml/watchr
# http://www.ravelrumba.com/blog/watch-compile-less-command-line/
#watchr -e 'watch(".*\.less$") { |f| system("lessc #{f[0]} > #{f[0]}.css && echo \"#{f[0]} > #{f[0]}.css\" ") }'
while true;do N=`find -name "*.less" `;inotifywait -qe modify $N ;for f in $N;do lessc $f ${f%.*}.css;done;done
