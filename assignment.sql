CREATE TABLE Departments (
    department_id int NOT NULL AUTO_INCREMENT,
    department_name varchar(255) not null,
    department_description varchar(255),
    PRIMARY KEY (department_id)
);
CREATE TABLE Users (
    user_id int NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    user_email varchar(255) NOT NULL UNIQUE,
    user_password varchar(255) NOT NULL,
    department_id int,
   	FOREIGN KEY (department_id) REFERENCES Departments(department_id),
    PRIMARY KEY (user_id)
);
CREATE TABLE Courses (
    course_id int NOT NULL AUTO_INCREMENT,
    course_name varchar(255) NOT NULL,
    course_description varchar(255) NOT NULL,
    instructor_name varchar(255) NOT NULL,
    department_id int,
    credit_hours int,
   	FOREIGN KEY (department_id) REFERENCES Departments(department_id),
    PRIMARY KEY (course_id)
);
	INSERT into Departments (department_name,department_description) values ("computer and communication","Lorem Ipsum is simply dummy text of the printing");
	INSERT into Departments (department_name,department_description) values ("electro mechanics","Lorem Ipsum is simply dummy text of the printing");
	INSERT into Departments (department_name,department_description) values ("Architecture and construction","Lorem Ipsum is simply dummy text of the printing");
	INSERT into Departments (department_name,department_description) values ("petrochemicals","Lorem Ipsum is simply dummy text of the printing");

	INSERT into Courses (course_name,course_description,instructor_name,department_id,credit_hours) values ("algortithms","Lorem Ipsum is simply dummy text","Amr Elmasry",1,3);
	INSERT into Courses (course_name,course_description,instructor_name,department_id,credit_hours) values ("chemistry","Lorem Ipsum is simply dummy text","Yasser fouad",4,4);
	INSERT into Courses (course_name,course_description,instructor_name,department_id,credit_hours) values ("mechanics","Lorem Ipsum is simply dummy text","Ahmed",2,3);
	INSERT into Courses (course_name,course_description,instructor_name,department_id,credit_hours) values ("graph","Lorem Ipsum is simply dummy text","Maged",3,3);