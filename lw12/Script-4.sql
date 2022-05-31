SELECT
	student.id, student.surname, groups.title AS "group", faculty.title AS "faculty"
FROM
	student
    INNER JOIN groups ON student.groups_id = groups.id
    INNER JOIN faculty ON groups.faculty_id = faculty.id
WHERE 
	surname = "Egorov";