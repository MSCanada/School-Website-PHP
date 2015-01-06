
use university_project;
ALTER TABLE university_record
MODIFY COLUMN mobile_number bigint(100);
INSERT INTO university_record(UserName, Pass_Word, email, gender, mobile_number, address) VALUES ('Muhammad Suhail', 'cricket', 'sohail.nedian@hotmail.com','male',5197215063,'507-187 Brybeck Crescent');
select * from university_record;