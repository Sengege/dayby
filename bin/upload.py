import os
path='/Users/air/Documents/Dayby/htmls'
Files=os.listdir(path)
for file in Files:
	if "html"==file[-4:]:
	#	print "what the fuck"
	#	continue

		command="scp " + path+'/'+file +" tristan@zp.tristan.pub:~/nginx/daily"
		os.system(command)
 		#print command
