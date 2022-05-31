USE university;
SELECT
	student.id, student.surname, student.age, groups.title AS "group", faculty.title AS "faculty"
FROM
	student
    INNER JOIN groups ON student.groups_id = groups.id
    INNER JOIN faculty ON faculty_id = faculty.id
WHERE
	faculty.title = "МСФ";