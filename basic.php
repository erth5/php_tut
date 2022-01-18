<?php

#
#class Report
#{
#    public function generate(¼user){
#        test
#    }
#}

# for example put: &greeting=6&name=<a href="https://google.com">frank</a>
# on Browser line
# TODO Fehlerbehandlung: Undefined key greeting, name in AddressLeiste


$own = TRUE;
if ($maintainer = htmlspecialchars($_GET['my']))
    if (
        $maintainer == '?'
    )echo TRUE;
    else echo FALSE;
