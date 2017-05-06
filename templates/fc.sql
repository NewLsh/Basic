//插入课程
update classes set class_week=class_+$??? where room_name=$?? ;
//输出空教室
//蠕虫复制一个副表
//操作得到空教室的时间段 多一个表删除的操作？
-- update classes set class_week=262143-class_week;

//查询并返回结果
select * from emptyroom where week &$???;



//触发器重要
select * from allrooms as a join class as c on a.room_name=c.room_name where


delimiter ||
create trigger updata_class_in after insert on class for each row
begin
update 
//空教室表用视图来搞定
create view e1 as select from allrooms where room name not in (
  select room_name from classes where class_name &??
)

create view week1 as select a.id,a.name,a.size from allroom as a join rooms as r on a.name=r.name where r.week &1;
\\\
//查询课改为
select */id,name,size from e1?? join allrooms on e1.room_name=allrooms.room_name;

