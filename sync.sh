#!/bin/zsh

#scp -r index.php lib/ img/ css/ whatisadmin@whatispeterdoing.com:whatispeterdoing.com/
rsync -avz -e ssh ./ whatisadmin@whatispeterdoing.com:whatispeterdoing.com/ 
