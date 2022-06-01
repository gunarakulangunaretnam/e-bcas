from selenium import webdriver
from selenium.webdriver.support.select import Select
import os
import datetime
import csv
import time
import random
from selenium.webdriver.common.keys import Keys
from pynput.mouse import Button, Controller
from pynput.keyboard import Key, Controller
import re



path, dirs, files = next(os.walk("Testing_Reports/"))
file_count = len(files)
file_count = file_count + 1

datetimeVar = datetime.datetime.now()

keyboard = Controller()


curentTime = datetimeVar.strftime("%I:%M:%S %p")

f = open("Testing_Reports/Report No-{} ({}-{}-{}).txt".format(file_count,datetimeVar.year,datetimeVar.month,datetimeVar.day), "w")

fileName = "Report No-{} ({}-{}-{}).txt".format(file_count,datetimeVar.year,datetimeVar.month,datetimeVar.day)


browser = webdriver.Chrome('chromedriver')
browser.get("http://localhost/ebcas/1-source/")
browser.maximize_window()


f = open("Testing_Reports/{}".format(fileName), "a")
f.write("Testing Started on {}-{}-{} at {}".format(datetimeVar.year,datetimeVar.month,datetimeVar.day,curentTime))
f.write("\n")
f.write("===========================================")
f.write("\n")
f.write("\n")
f.close()

selectAccountType = Select(browser.find_element_by_name("acc"))
selectAccountType.select_by_visible_text('Admin')

EnterUsername = browser.find_element_by_name("username")
EnterUsername.send_keys('admin')

EnterPassword = browser.find_element_by_name("pass")
EnterPassword.send_keys('admin')

ClickBtn = browser.find_element_by_name("sub")
ClickBtn.click()

f = open("Testing_Reports/{}".format(fileName), "a")
f.write("The System has been logined as admin mood at {} \n".format(curentTime))
f.write("\n")
f.write("\n")
f.write("\n")


def CourseModuleRegisterTesting():

	Courses_Module = browser.find_element_by_link_text("Courses")
	Courses_Module.click()

	ClickrRegister = browser.find_element_by_link_text("Add Courses")
	ClickrRegister.click()

	with open("Add_Courses.csv") as course_file:

		reader = csv.reader(course_file)

		count = 0

		f.write("The testing process add course module starts at {}\n".format(curentTime))
		f.write("--------------------------------------------------------------------------\n")
		
		for row in reader:

			course_short_title = browser.find_element_by_id("course_short_title")
			course_short_title.send_keys(row[0])

			course_short_title = browser.find_element_by_id("course_full_title")
			course_short_title.send_keys(row[1])

			if row[2] == "Full-Time":
				selectTypeCourse = Select(browser.find_element_by_name("course_type"))
				selectTypeCourse.select_by_visible_text('Full-Time')

			elif row[2] == "Part-Time":
				selectTypeCourse = Select(browser.find_element_by_name("course_type"))
				selectTypeCourse.select_by_visible_text('Part-Time')

			course_short_title = browser.find_element_by_id("duration")
			course_short_title.send_keys(row[3])

			course_short_title = browser.find_element_by_id("total_payment")
			course_short_title.send_keys(row[4])

			login_btn = browser.find_element_by_xpath("//input[@type='submit']")
			login_btn.click()
			
			count = count + 1

			f.write("Row {} has been inserted starts at {}\n".format(count,curentTime))

		f.write("The testing process of add course module has been completed at {}\n".format(curentTime))
		f.write("--------------------------------------------------------------------------\n")
		f.write("\n")
		f.write("\n")
		f.write("\n")





def CourseModuleManageTesting():

	Courses_Module = browser.find_element_by_link_text("Courses")
	Courses_Module.click()

	time.sleep(0.5)

	ClickManage = browser.find_element_by_link_text("Manage Courses")
	ClickManage.click()

	f.write("The testing process Manage course module starts at {}\n".format(curentTime))
	f.write("-----------------------------------------------------------------------------\n")

	f.write("Row deleting process started at {}\n".format(curentTime))

	for i in range(3):
		
		selectDelete = browser.find_element_by_link_text("Delete")
		selectDelete.click()
		f.write("Row {} has been deleted successfully!\n".format(i))

	f.write("3 rows have been deleted successfully at {}".format(curentTime))
	f.write("\n")
	f.write("\n")

	f.write("The updating process started at {}\n".format(curentTime))
	browser.find_element_by_link_text("Edit").click()
	durationChnage = browser.find_element_by_name("duration")
	durationChnage.clear()
	durationChnage.send_keys("18 Months")
	browser.find_element_by_xpath("//input[@type='submit']").click()
	f.write("A row has been updated successfully\n")

	
	browser.find_element_by_xpath("(//a[@class='btn btn-primary btn-xs'])[2]").click()
	updateType = Select(browser.find_element_by_name("course_type"))
	updateType.select_by_visible_text('Part-Time')
	f.write("Another row has been updated successfully\n")
	browser.find_element_by_xpath("//input[@type='submit']").click()

	browser.find_element_by_xpath("(//a[@class='btn btn-primary btn-xs'])[3]").click()
	updatePayment = browser.find_element_by_id("total_payment")
	updatePayment.clear()
	updatePayment.send_keys("400000")
	f.write("Once more a row has been updated successfully\n")
	browser.find_element_by_xpath("//input[@type='submit']").click()
	
	
	f.write("Updating testing process has been completed successfully\n")
	f.write("The testing process of manage course module has been completed at {}\n".format(curentTime))
	f.write("-----------------------------------------------------------------------------\n")
	f.write("\n")
	f.write("\n")



    
	

	
def addAndManageBatchedTesting():

	browser.find_element_by_link_text("Batches").click()
	browser.find_element_by_link_text("Add Batches").click()

	f.write("The testing process of add batches module started at {}\n".format(curentTime))
	f.write("-----------------------------------------------------------------------------\n")
	f.write("\n")

	curentDate = str(datetimeVar.year)+"-"+str(datetimeVar.month)+"-"+str(datetimeVar.day)
	

	randomDate = ["2020-05-06","2021-08-10","2020-01-02","2020-05-04","2022-07-05","2023-08-07"]	
	
	with open("Add_batches.csv") as batches:

		reader = csv.reader(batches)

		count = 1 

		for i in reader:
	
			for o in range(3):

				browser.find_element_by_id("department").send_keys(i[0])
				browser.find_element_by_id("department").send_keys(u'\ue007')

				startDate = browser.find_element_by_id("start_date").send_keys(curentDate)
				endDate = browser.find_element_by_id("end_date").send_keys(randomDate[random.randint(0,5)])
				browser.find_element_by_xpath("//input[@type='submit']").click()
				
				f.write("A new batch created at {}\n".format(curentTime))
				
				browser.find_element_by_link_text("Batches").click()
				time.sleep(0.2)
				browser.find_element_by_link_text("Add Batches").click()

	f.write("The process of batch creation completed at {}\n".format(curentTime))
	f.write("\n")

	f.write("The process deleting batches has been started\n")
	f.write("\n")

	browser.find_element_by_link_text("Batches").click()

	time.sleep(0.3)
	browser.find_element_by_link_text("Manage Batches").click()

	for i in range(5):

		browser.find_element_by_link_text("Delete").click()
		f.write("A batch has been removed from the database\n")

	f.write("The testing process of batches has been completed at {}\n".format(curentTime))
	f.write("------------------------------------------------------------------------------\n")
	f.write("\n")
	f.write("\n")
	f.write("\n")


def departmentTestingModules():

	browser.find_element_by_link_text("Department").click()
	browser.find_element_by_link_text("Add Department").click()

	f.write("The testing process of Department module started at {}\n".format(curentTime))
	f.write("---------------------------------------------------------------------------------\n")
	f.write("\n")

	with open("Add_Departments.csv") as departments:

		reader = csv.reader(departments)

		count = 1

		for row in reader:

			browser.find_element_by_id("department_short_name").send_keys(row[1])
			browser.find_element_by_id("department_full_name").send_keys(row[0])

			browser.find_element_by_xpath("//input[@type='submit']").click()
			f.write("A department has been added to the database at {}\n".format(curentTime))


	browser.find_element_by_link_text("Department").click()
	time.sleep(0.3)
	browser.find_element_by_link_text("Manage Department").click()

	for i in range(3):

		browser.find_element_by_link_text("Delete").click()
		f.write("\n")
		f.write("A department deleted at {}\n".format(curentTime))

	


def moduleTestingSection():

	browser.find_element_by_link_text("Module").click()
	browser.find_element_by_link_text("Add Module").click()

	f.write("The testing process of Module section started at {}\n".format(curentTime))
	f.write("---------------------------------------------------------------------------------\n")
	f.write("\n")

	f.write("\n")


	with open("Add_Modules.csv") as modules:

		reader = csv.reader(modules)

		count = 1 

		for row in reader:

			randUnitNumber = random.randint(999,9999)

			browser.find_element_by_id("module_code").send_keys(randUnitNumber)

			browser.find_element_by_id("module_name").send_keys(row[0])

			randLevel = random.randint(1,2)

			if randLevel==1:

				selectLevel = Select(browser.find_element_by_name("module_level"))
				selectLevel.select_by_visible_text('Level-04')
			
			elif randLevel == 2:

				selectLevel = Select(browser.find_element_by_name("module_level"))
				selectLevel.select_by_visible_text('Level-05')

			creadits = random.randrange(60,180,5)

			browser.find_element_by_id("module_credit").send_keys(creadits)

			leacturesHours = random.randrange(40,120,10)

			browser.find_element_by_id("module_hours").send_keys(leacturesHours)

			browser.find_element_by_id("module_course").send_keys(row[1])

			browser.find_element_by_xpath("//input[@type='submit']").click()

			f.write("Row number {} has been entered into the database \n".format(count))

			count = count + 1 


	f.write("The testing process of manage module started at {}\n".format(curentTime))
	f.write("\n")

	browser.find_element_by_link_text("Module").click()
	time.sleep(0.4)
	browser.find_element_by_link_text("Manage Module").click()

	with open("Course_names.csv") as modulesNames:

		reader2 = csv.reader(modulesNames)

		count2 = 1

		for row in reader2:

			selection = Select(browser.find_element_by_id("course_id"))
			selection.select_by_visible_text(row[0])
			browser.find_element_by_id("search_btn").click()
			browser.find_element_by_link_text("Edit").click()
			browser.find_element_by_id("module_name").clear()
			browser.find_element_by_id("module_name").send_keys("Testing is done")
			browser.find_element_by_xpath("//input[@type='submit']").click()

			selection = Select(browser.find_element_by_id("course_id"))
			selection.select_by_visible_text(row[0])
			browser.find_element_by_id("search_btn").click()
			browser.find_element_by_link_text("Delete").click()

			f.write("Updating and Deleting process successfully done for row number {}\n".format(count2))

			count2 = count2 + 1

	f.write("\n")
	f.write("The testing process of Module section completed at {}\n".format(curentTime))
	f.write("---------------------------------------------------------------------------------\n")



def studentTestingModule():

	f.write("The testing process of student module started at {}\n".format(curentTime))
	f.write("---------------------------------------------------------------------------------\n")
	f.write("\n")
	f.write("\n")
	f.write("\n")



	browser.find_element_by_link_text("Student").click()
	browser.find_element_by_link_text("Register Student").click()


	with open("Add_Students.csv") as studentsData:

		reader = csv.reader(studentsData)

		count = 0

		for row in reader:

			studentIDPrefix = "AIT-"
			studentIDNumber = random.randint(1000000,9000000)
			browser.find_element_by_id("student_id").send_keys(studentIDPrefix+str(studentIDNumber))

			cleanUpNonCHa = re.sub(r'\W+', '', row[0])
			trimCHa=cleanUpNonCHa.strip()
			browser.find_element_by_id("first_name").send_keys(trimCHa)

			cleanUpNonCHa2 = re.sub(r'\W+', '', row[1])
			trimCHa2=cleanUpNonCHa2.strip()
			browser.find_element_by_id("last_name").send_keys(trimCHa2)

			day = random.randint(1,28)
			month = random.randint(1,12)
			year  =random.randint(1953,2013)

			browser.find_element_by_id("dob").send_keys(str(day)+"-"+str(month)+"-"+str(year))

			age = random.randint(15,65)

			browser.find_element_by_id("age").send_keys(age)

			gender = random.randint(1,2)

			if gender == 1:

				browser.find_element_by_xpath("//body//div[@class='col-sm-12 col-xs-11 col-md-5']//div//input[1]").click()

			elif gender == 2:

				browser.find_element_by_xpath("//body//input[2]").click()

			browser.find_element_by_id("address").send_keys(row[2])

			browser.find_element_by_id("email").send_keys(row[3])

			phoneNumberPrefix = ["077","071","076","075","072"]

			phoneNumberPrefixSelector = random.randint(0,4)

			phoneNumberPrefix = phoneNumberPrefix[phoneNumberPrefixSelector]

			phoneNumberRamdom = random.randint(1000000,9999999)

			browser.find_element_by_id("phone").send_keys(phoneNumberPrefix+str(phoneNumberRamdom))

			nicCardNum = random.randint(0,9999999999)

			browser.find_element_by_id("nic").send_keys(str(nicCardNum)+"V")

			browser.find_element_by_id("course").send_keys(row[4])

			browser.find_element_by_id("id2").send_keys(row[5])

			browser.find_element_by_xpath("//input[@class='btn btn-success form-control']").click()

			count +=1

			f.write("A new student has been inserted at {}\n".format(curentTime)) 

			browser.find_element_by_link_text("Student").click()
			time.sleep(0.4)
			browser.find_element_by_link_text("Register Student").click()

	
	f.write("\n")
	f.write("\n")

	browser.find_element_by_link_text("Student").click()
	time.sleep(0.3)
	browser.find_element_by_link_text("Manage Student").click()
	
	for i in range(10):
		
		browser.find_element_by_link_text("Delete").click()

		f.write("A student has been removed \n")

	f.write("\n")

	for u in range(10):

		browser.find_element_by_link_text("Edit").click()
		age = random.randint(15,62)

		a = browser.find_element_by_id("age")
		a.clear()
		a.send_keys(str(age))

		browser.find_element_by_xpath("//input[@class='btn btn-success form-control']").click()

		f.write("A student details has been modified\n")
	f.write("\n")
	f.write("\n")
	
	f.write("The testing process of student module completed at {}\n".format(curentTime))
	f.write("------------------------------------------------------------------------------------\n")




def staffTestingModule():

	f.write("The testing process of staff module started at {}\n".format(curentTime))
	f.write("---------------------------------------------------------------------------------\n")
	f.write("\n")
	f.write("\n")
	f.write("\n")

	browser.find_element_by_link_text("Staff").click()
	browser.find_element_by_link_text("Register Staff").click()

	with open("Add_Employee.csv") as employees:

		reader = csv.reader(employees)

		count = 1

		for row in reader:

			staffIDPrefix = "EIT-"
			staffIDNumber = random.randint(1000000,9000000)
			browser.find_element_by_id("staff_id").send_keys(staffIDPrefix+str(staffIDNumber))

			cleanUpNonCHa = re.sub(r'\W+', '', row[0])
			trimCHa=cleanUpNonCHa.strip()
			browser.find_element_by_id("first_name").send_keys(trimCHa)

			cleanUpNonCHa2 = re.sub(r'\W+', '', row[1])
			trimCHa2=cleanUpNonCHa2.strip()
			browser.find_element_by_id("last_name").send_keys(trimCHa2)

			day = random.randint(1,28)
			month = random.randint(1,12)
			year  =random.randint(1953,2013)

			browser.find_element_by_id("dob").send_keys(str(day)+"-"+str(month)+"-"+str(year))


			age = random.randint(15,65)

			browser.find_element_by_id("age").send_keys(age)

			gender = random.randint(1,2)

			if gender == 1:

				browser.find_element_by_xpath("//body//div[@class='col-sm-12 col-xs-11 col-md-5']//div//input[1]").click()

			elif gender == 2:

				browser.find_element_by_xpath("//body//input[2]").click()

			browser.find_element_by_id("job_title").send_keys(row[2])

			jobRandom = random.randint(1,2)

			if jobRandom == 1:
				
				selection = Select(browser.find_element_by_name("job_type"))
				selection.select_by_visible_text('Full-Time')
			
			elif jobRandom == 2:

				selection = Select(browser.find_element_by_name("job_type"))
				selection.select_by_visible_text('Part-Time')

			browser.find_element_by_id("address").send_keys(row[3])

			browser.find_element_by_id("email").send_keys(row[4])

			phoneNumberPrefix = ["077","071","076","075","072"]

			phoneNumberPrefixSelector = random.randint(0,4)

			phoneNumberPrefix = phoneNumberPrefix[phoneNumberPrefixSelector]

			phoneNumberRamdom = random.randint(1000000,9999999)

			browser.find_element_by_id("phone").send_keys(phoneNumberPrefix+str(phoneNumberRamdom))

			nicCardNum = random.randint(0,9999999999)

			browser.find_element_by_id("nic").send_keys(str(nicCardNum)+"V")

			browser.find_element_by_id("department").send_keys(row[5])

			browser.find_element_by_xpath("//input[@class='btn btn-success form-control']").click()

			f.write("A new staff has been inserted at {}\n".format(curentTime)) 

			browser.find_element_by_link_text("Staff").click()
			time.sleep(0.4)
			browser.find_element_by_link_text("Register Staff").click()

	f.write("\n")
	f.write("\n")

	browser.find_element_by_link_text("Staff").click()
	time.sleep(0.3)
	browser.find_element_by_link_text("Manage Staff").click()
	
	for i in range(10):
		
		browser.find_element_by_link_text("Delete").click()

		f.write("A staff has been removed \n")

	f.write("\n")

	for u in range(10):

		browser.find_element_by_link_text("Edit").click()
		age = random.randint(15,62)

		a = browser.find_element_by_id("age")
		a.clear()
		a.send_keys(str(age))

		browser.find_element_by_xpath("//input[@class='btn btn-success form-control']").click()

		f.write("A staff details has been modified\n")

	f.write("\n")
	f.write("\n")
	
	f.write("The testing process of staff module completed at {}\n".format(curentTime))
	f.write("------------------------------------------------------------------------------------\n")


def userAccountModuleTesting():

	f.write("The testing process of user account started at {}\n".format(curentTime))
	f.write("---------------------------------------------------------------------------------\n")
	f.write("\n")
	f.write("\n")
	f.write("\n")

	browser.find_element_by_link_text("Student Accounts").click()
	browser.find_element_by_link_text("Create Accounts").click()

	with open("User_Accounts.csv") as accounts:

		reader = csv.reader(accounts)

		count = 1

		for row in reader:

			browser.find_element_by_id("course_id").send_keys(row[0])
			browser.find_element_by_id("batch_data2").send_keys(row[1])
			browser.find_element_by_id("student_data2").send_keys(row[2])
			
			browser.find_element_by_id("password").send_keys("password123")
			
			browser.find_element_by_id("submitBTn").click()


			f.write("A new user account has been created at {}\n".format(curentTime))


			count = count + 1
			browser.find_element_by_link_text("Student Accounts").click()
			time.sleep(0.4)
			browser.find_element_by_link_text("Create Accounts").click()

	f.write("\n")
	f.write("\n")
	
	f.write("The testing process of user accounts module completed at {}\n".format(curentTime))
	f.write("------------------------------------------------------------------------------------\n")



def settingsTesting():
	f.write("The testing process of setting module started at {}\n".format(curentTime))
	f.write("---------------------------------------------------------------------------------\n")
	f.write("\n")
	f.write("\n")
	
	browser.find_element_by_link_text("Account").click()
	browser.find_element_by_link_text("Settings").click()

	browser.find_element_by_link_text("Account Settings").click()
	browser.find_element_by_xpath("//li[@id='change_theme_btn']//a[1]").click()
	time.sleep(0.5)
	browser.find_element_by_id("default_theme").click()

	time.sleep(0.5)
	browser.find_element_by_link_text("Account Settings").click()
	browser.find_element_by_xpath("//li[@id='change_theme_btn']//a[1]").click()
	time.sleep(0.5)
	browser.find_element_by_id("mango_purple_theme").click()

	time.sleep(0.5)
	browser.find_element_by_link_text("Account Settings").click()
	browser.find_element_by_xpath("//li[@id='change_theme_btn']//a[1]").click()
	time.sleep(0.5)
	browser.find_element_by_id("blue_whale_theme").click()

	time.sleep(0.5)
	browser.find_element_by_link_text("Account Settings").click()
	browser.find_element_by_xpath("//li[@id='change_theme_btn']//a[1]").click()
	time.sleep(0.2)
	browser.find_element_by_id("greener_theme").click()

	time.sleep(0.5)
	browser.find_element_by_link_text("Account Settings").click()
	browser.find_element_by_xpath("//li[@id='change_theme_btn']//a[1]").click()
	time.sleep(0.5)
	browser.find_element_by_id("pinker_theme").click()

	time.sleep(0.5)
	browser.find_element_by_link_text("Account Settings").click()
	browser.find_element_by_xpath("//li[@id='change_theme_btn']//a[1]").click()
	time.sleep(0.5)
	browser.find_element_by_id("yellower_theme").click()
	
	time.sleep(0.5)
	browser.find_element_by_link_text("Account Settings").click()
	browser.find_element_by_xpath("//li[@id='change_theme_btn']//a[1]").click()
	time.sleep(0.5)
	browser.find_element_by_id("default_theme").click()



	
f.write("\n")
f.write("\n")
f.write("\n")
	
f.write("The testing process of the system completed at {}\n".format(curentTime))
f.write("------------------------------------------------------------------------------------\n")


#CourseModuleRegisterTesting()
#CourseModuleManageTesting()	
#addAndManageBatchedTesting()
#departmentTestingModules()
#moduleTestingSection()
studentTestingModule()
#staffTestingModule()
#userAccountModuleTesting()
#settingsTesting()










 




