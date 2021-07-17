CREATE TABLE todos (
  id INT NOT NULL AUTO_INCREMENT,
  is_done BOOL DEFAULT false,
  title TEXT,
  PRIMARY KEY(id)
);

INSERT INTO todos (title) VALUES ('PHP学習');
INSERT INTO todos (title, is_done) VALUES ('RUBY学習', true);
INSERT INTO todos (title) VALUES ('今日は遊ぶ');

SELECT * FROM todos;