$sql="SELECT 
    batchs.name as batch_name,
    batchs.id as batch_id
    , concat('[', group_concat(JSON_OBJECT('name', s.name, 'id', s.id) order by s.id separator ','), ']') as students
    FROM batchs
    JOIN students s ON s.batch_id = batchs.id";
