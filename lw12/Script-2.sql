USE university;
SELECT
    student.id, student.surname, student.age, groups.title AS "group"
FROM
	student
    INNER JOIN groups ON student.groups_id = groups.id
WHERE
	groups.title = "МС-13";