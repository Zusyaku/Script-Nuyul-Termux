#!/data/data/com.termux/files/usr/bin/fish

# bantu subrek me yt
# https://youtube.com/channel/UCtu-GcxKL8kJBXpR1wfMgWg

# tinggal pencet aja om masak habisin kuota :)

## set modul
set use google
set connect ab
set rand random
set list pv
set feature set_color

#//////////////////color///////
             set b (set_color -o blue)
             set ij (set_color -o green)
             set me (set_color -o red)
             set cy (set_color -o cyan)
             set m (set_color -o magenta)
             set ku (set_color -o yellow)
             set pu (set_color -o white)
             set st '\e[00m'

set main __main__


function finder
set COUNT 0
             # lynx sebagai pencari dork nya bisa juga memakai w3m
        while [ "$COUNT" -le 250 ]
                                lynx "http://www.google.com/search?q=$argv[1]&start=$COUNT" -dump -listonly | \
                                grep 'url?q=' | cut -d ' ' -f4 | sed 's/http:\/\/www.google.com\/url?q=//' | sed 's/\(&sa=\).*//' | sed -f file/urldecode.sed >> "nil"
                                                set COUNT (math $COUNT+12)
                                                        end
                                                                echo
                                    end     
function clean
set beg (wc -l nil | cut -d' ' -f1)

       echo -e "Found $beg Links:" | grep --color -E 'Found||Links'
        cat nil | pv --quiet --rate-limit 270
end

# banner
function banner
 begin
       echo -e $m"╔═╗╔═╗╔═╗╔═╗╦  ╔═╗  ╔╦╗╔═╗╦═╗╦╔═"; sleep 0.1
       echo -e $m"║ ╦║ ║║ ║║ ╦║  ║╣    ║║║ ║╠╦╝╠╩╗"; sleep 0.1
       echo -e $m"╚═╝╚═╝╚═╝╚═╝╩═╝╚═╝  ═╩╝╚═╝╩╚═╩ ╩"; sleep 0.1
       echo -e $b"________________________________"; sleep 0.1
       echo -e $me"[$ku?$me]$pu Author$me  :$cy Polygon"; sleep 0.1
       echo -e $b"[$ku?$b]$pu Youtube$me :$m pejuang$ij kentang"; sleep 0.1
       echo -e $m"[$ku?$m]$pu Team$me    :$ku Helixs-crew$b &$cy COINTER"; sleep 0.1
       echo -e $b"________________________________"; sleep 0.1
       echo -e $b"[$me•$ij•$b]$st fish shell"; sleep 0.1
       echo
     
  end
end

function ct
    rm -rf nil
   exit 3
end
trap ct SIGINT

function main
    clear
begin
    banner
    end
     echo -e $b"[$pu masukan dork nya $b]$st"
     read dork

if test -z "$dork"
echo
   echo -e $pu"INPUT KOSONG"
echo
      exit 2
end

# test connection
begin
   echo
      $connect -n 2 $dork/tcp
     echo
echo
   printf "\t\t-=[ Start dorking ]=-\n"
 echo

finder "$dork"
clean 

 

    echo
    printf $me"[$pu simpan y/n $me]"$st
    echo
       read bad
if test "$bad" = y
     echo -e $ij"[$ku menyimpan $ij]"
echo
     cat nil >> dork.txt
     
echo -e $b"[$pu berhasil di simpan dork.txt $b]"$st
  echo
  exit 4
else if test "$bad" = n
rm -rf nil
     sleep 0.1
        exit 4
else
    clear
        exit 5
  end
end
     
     
end

begin
     if test "$main" = "__main__"
            begin
                  main
            end
      end
end
