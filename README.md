วิธีการติดตั้งโปรแกรม
1. สร้างไฟล์ .env โดย copy จากไฟล์ .env.example 
แล้วแก้ไขไฟล์ตามรายละเอียดด้านล่าง ดังต่อไปนี้
	DB_DATABASE = massageparlor
	DB_USERNAME= root
	DB_PASSWORD=
2. พิมพ์คำสั่ง composer update ลงใน Terminal
3. สร้าง database ชื่อ massageparlor
4. ทำการ migrate database ด้วยคำสั่ง php artisan migrate
5. ทำการใส่ข้อมูลเบื้องต้นเข้าสู่ database ด้วยคำสั่ง php artisan db:seed
6. อีเมล์ admin : oscar@github.com รหัส  admin
**********************************************************
7. อีเมล์สำหรับติดต่อ : weerapat.ka@ku.th
Facebookสำหรับติดต่อ: Weerapat Karavee


รายละเอียดหน้าที่การทำงานภายในกลุ่ม 
1.นาย  วีรภัทร การะวี : 
	รับผิดชอบในส่วนของ	- การทำหน้าจองเวลานวด 
			- การแก้ปัญหาในเรื่องของ GIT ทั้งหมดในเวลาที่ GIT มีปัญหา 	
			- การทำ authentication
			- แก้ debug งานที่เพื่อนเจอปัญหา 

2.นางสาวนฤมล เพชรศิริ : 
	รับผิดชอบในส่วนของ	- สร้างหน้า contact us , massager
			-generate google map ในหน้า contact us 
			- ทำ slide show รูปภาพหน้า home 
			- ช่วยจัดวาง layout หน้า home,add employee , ออกแบบหน้าจอของตัวเว็บไซต์  ร่วมกับ นางสาวบุณยาพร
			- ช่วยจัดวาง layout หน้า package&promotion,generate voucher ร่วมกับ นายอริยมรรค
			- การจัด component, query ข้อมูลรูปภาพและข้อมูลจาก database มาแสดง
			- การสร้าง route path ใน web.php เพื่อเชื่อมหน้าจอต่างๆ ร่วมกับ นางสาวบุณยาพร
			- ช่วยเพื่อน debug โปรแกรมเล็กน้อย
			- จัดการเกี่ยวกับการมีสิทธิ์เข้าถึงแถบ menubar ที่เป็นของ guest,member และ admin
3.นางสาวบุณยาพร นาคจำรัสศรี :
	รับผิดชอบในส่วนของ	- สร้างโครงสร้างส่วนประกอบของ menubar
			- สร้างหน้า add massager , add promotion
			- ช่วยจัดวาง และให้คำแนะนำในการจัดวางหน้า CSS ให้เพื่อนๆ เกี่ยวกับlayout หน้า home,add employee, reservation , ออกแบบหน้าจอของตัวเว็บไซต์  ร่วมกับ นางสาวนฤมล
			- ทำแถบ login , logout, register ตรงแถบด้านบนให้สมบูรณ์ตามที่ออกแบบไว้
			- ช่วยจัดวาง layout ของ pdf voucher ร่วมกับ นายอริยมรรค
			- การจัด component, query ข้อมูลรูปภาพและข้อมูลจาก database มาแสดง
			- การสร้าง route path ใน web.php เพื่อเชื่อมหน้าจอต่างๆ และส่วนต่างๆของโปรแกรม ร่วมกับ นางสาวนฤมล
			- ช่วยเพื่อน debug โปรแกรมเล็กน้อย
			- จัดการเกี่ยวกับการมีสิทธิ์เข้าถึงแถบ menubar ที่เป็นของ guest,member และ admin
4.นายอภิสิทธิ์ รุขพันธ์เมธี
	รับผิดชอบในส่วนของ	- การสร้างไฟล์migrateและไฟล์seederทั้งหมด
			- ส่วนของcontrollerที่มีการทำงานร่วมกับdatabase เช่น การใส่ข้อมูล ลบข้อมูลเป็นต้น
			- ส่วนของroleต่างๆ โดยใช้composer package httpoz
			- ใช้middlewareในการกำหนดผู้ที่มีสิทธิ์เข้าถึงในหน้าต่างๆ
5.นายอริยมรรค ภัทรพงศ์โอฬาร 
	รับผิดชอบในส่วนของ 	- สร้างไฟล์ create_voucher ที่ทำการสร้าง voucher 
			- สามารถนำ voucher มาสร้างเป็นไฟล์ pdf เพื่อปริ้นได้ 
			  โดยการสร้างpdf คือการ export jspdf ในlaravel 5.3 
			- จัดวางหน้า voucher ที่เป็นไฟล์ pdf
			- จัดการส่วน database ที่จะคิวรี่ voucher ที่ต้องการจะปริ้นออกมา
			- สร้าง controller สำหรับการcreate vocher ปละ gen pdf
			


