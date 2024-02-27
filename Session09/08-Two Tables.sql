# Adding authors to the database
# We specify the IDs so they are known when we add the jokes below.

INSERT INTO author SET
id = 1,
name = 'Tony Evans',
email = 'tony.evans@nmtafe.wa.edu.au';


INSERT INTO author (id, name, email)
VALUES (2, 'Jenny Smith', 'jenny@yahoo.com');

# Add id 1 manually to joke table for author Tony
# Add id 2 manually to joke table for author Jenny

#Or use the statements in 09-Update Joke Table.sql to update for you.


