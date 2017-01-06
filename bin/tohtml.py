import markdown
import os
import codecs
binpath='/Users/air/Documents/Dayby/bin'
#from ./bin get previous path.The app root path.
rootpath=binpath[:-4]
mdpath=rootpath+'/md'#md files path
htmlspath=rootpath+'/htmls'#write to htmls path
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

	
