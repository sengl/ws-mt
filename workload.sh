#!/bin/bash

# variables

args=("$@")
numconns=(300 400 500 600 700)
rate=(30 40 50 60 70)
server=(ws-mt ws-mt-1 ws-mt-2 ws-mt-4)
count_loads=${#numconns[@]}
count_envs=${#server[@]}
test_load=(0 1)
test_env=(2 3)

# helper functions

function listcontains()
{
	[[ $1 =~ (^| )$2($| ) ]] && echo 1 || echo 0
	#for number in $1
	#do
	#	[[ $number == $2 ]] && echo 1
	#done
	#echo 0
	#local hay needle=$2
	#shift
	#for hay
	#do
	#	[[ $hay == $needle ]] && echo 1
	#done
	#return 1
}

echo 1 $(listcontains $test_load 0)
echo 2 $(listcontains $test_load 1)
#echo 3 $(listcontains ${test_load[@]} 2)
#echo 4 $(listcontains ${test_load[@]} 3)
#echo 5 $(listcontains ${test_load[@]} 4)

#echo 6 $(listcontains ${test_env[@]} 0)
#echo 7 $(listcontains ${test_env[@]} 1)
#echo 8 $(listcontains ${test_env[@]} 2)
#echo 9 $(listcontains ${test_env[@]} 3)

# load producing

function produce_load()
{
	httperf --hog --server=$3.elasticbeanstalk.com --num-conns=$1 --rate=$2 --timeout=2 --uri=/index --verbose | tee load_$1_$2_$3.txt
}

# load issueing
for (( i=0; i<$count_loads ; i++ ))
do
	if [ $(listcontains ${test_load[@]} $i) == 1 ]
	then
		for (( j=0; j<$count_envs; j++ ))
		do
			if [ $(listcontains ${test_env[@]} $j) == 1 ]
			then
				#echo "Start to produce load for server ${server[$j]}.elasticbeanstalk.com with ${numconns[$i]} connections and a rate of ${rate[$i]}."
				#produce_load ${numconns[$i]} ${rate[$i]} ${server[$j]}
				#sleep 5
			fi
		done
	fi
done
