# todo
Задача: сделать простое API todo листа.     

Реализовать основные методы для создания, изменения и удаления задачи.     
Требования:  
  — Использовать для хранения БД  
  — Не использовать фреймворки  
  — Писать в ОО стиле  
  — Использовать git и composer.

bd: todo

table: actionList

fields: id(INT),text(TEXT),status(INT),date(TIMESTAMP)

Пример Update: https://todo.local/actionUpdate/?id=2&text=test3

Пример Create: https://todo.local/actionCreate/?text=test2

Пример Delete: https://todo.local/actionDelete/?id=2

Пример View: https://todo.local/ или https://todo.local/actionView/
