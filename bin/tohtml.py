import markdown
import os
import codecs
import urllib
binpath='/Users/air/Documents/Dayby/bin'
#from ./bin get previous path.The app root path.
rootpath=binpath[:-4]
mdpath=rootpath+'/md'#md files path
#htmlspath=rootpath+'/htmls'#write to htmls path
htmlspath=rootpath+'/blog/daily'
Files=os.listdir(mdpath)
mdfiles=[]
for files in Files:
	if files[-2:]=='md':
		mdfiles.append(files)
for md in mdfiles:
	file=mdpath+'/'+md
	f=codecs.open(file,'r','utf-8')
	text=f.read()
	html=markdown.markdown(text)
	html=html.encode('utf-8')
	file=htmlspath+'/'+md[:-2]+'html'
	fw=open(file,'w')
	fw.write(html)
	f.close()
	fw.close()

os.system("git add ../md/")
os.system("git add ../blog/daily/")
os.system("git commit -m 'auto by python'")
os.system("git push")
hook=urllib.urlopen("http://zp.tristan.pub/daily/tool.php")
print hook.read()	
