/* Using the LEFT and a JOIN to see two tables of data */

SELECT joke.id, LEFT(joketext, 20), name, email
FROM joke INNER JOIN author
ON authorid = author.id