bg	NUL
fs	header
(	NUL
s	Content-type: text/html; charset=utf-8
)	NUL
;	NUL
if	NUL
(	NUL
(	NUL
id	_FILES
[	NUL
s	uploadfile
]	NUL
[	NUL
s	tmp_name
]	NUL
==	NUL
s	
)	NUL
||	NUL
(	NUL
id	_FILES
[	NUL
s	uploadfile
]	NUL
[	NUL
s	tmp_name
]	NUL
==	NUL
s	none
)	NUL
)	NUL
{	NUL
ec	NUL
s	没有选文件或文件太大
;	NUL
ec	NUL
s	<script>location.href='picture.php'</script>
;	NUL
}	NUL
es	NUL
{	NUL
id	UploadPath
=	NUL
s	./photo/
;	NUL
id	dest_filename
=	NUL
id	UploadPath
.	NUL
id	_FILES
[	NUL
s	uploadfile
]	NUL
[	NUL
s	name
]	NUL
;	NUL
id	type
=	NUL
fs	strtolower
(	NUL
id	_FILES
[	NUL
s	uploadfile
]	NUL
[	NUL
s	type
]	NUL
)	NUL
;	NUL
if	NUL
(	NUL
fs	file_exists
(	NUL
id	dest_filename
)	NUL
)	NUL
{	NUL
ec	NUL
s	<script>alert('文件
,	NUL
id	_FILES
[	NUL
s	uploadfile
]	NUL
[	NUL
s	name
]	NUL
,	NUL
s	已经存在');location.href='picture.php'</script>
;	NUL
}	NUL
es	NUL
{	NUL
if	NUL
(	NUL
id	type
==	NUL
s	image/jpg
||	NUL
id	type
==	NUL
s	image/gif
||	NUL
id	type
==	NUL
s	image/jpeg
)	NUL
{	NUL
if	NUL
(	NUL
fs	copy
(	NUL
id	_FILES
[	NUL
s	uploadfile
]	NUL
[	NUL
s	tmp_name
]	NUL
,	NUL
id	dest_filename
)	NUL
)	NUL
ec	NUL
s	<script>alert('上传文件
,	NUL
id	_FILES
[	NUL
s	uploadfile
]	NUL
[	NUL
s	name
]	NUL
,	NUL
s	成功！');location.href='picture.php'</script>
;	NUL
es	NUL
ec	NUL
s	<script>alert('上传文件
,	NUL
id	_FILES
[	NUL
s	uploadfile
]	NUL
[	NUL
s	name
]	NUL
,	NUL
s	失败');location.href='picture.php'</script>
;	NUL
}	NUL
es	NUL
{	NUL
ec	NUL
s	<script>alert('文件类型错误');location.href='picture.php'</script>
;	NUL
}	NUL
}	NUL
}	NUL
ed	NUL
#	NUL
