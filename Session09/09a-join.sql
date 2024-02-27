/* This statement slects the id from joke table and dsiplays the first 20 characters on the left of the field with the author id */

/* Try changing to RIGHT to see the difference */

SELECT id, LEFT(joketext, 20), authorid FROM joke