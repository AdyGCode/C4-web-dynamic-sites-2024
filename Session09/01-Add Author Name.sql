/*If we wanted to track another piece of information about our jokes: the
names of the people who submitted them. Add a new column
to the joke table. Paste the following sql statement into the phpmyadmin sql window.*/

ALTER TABLE joke ADD COLUMN authorname VARCHAR(255)