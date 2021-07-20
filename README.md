# PHP-POSTGRESQL-SAMPLE-APP

## 1. php 서버 설치
- 기존에 apache 서버와 mysql 서버도 함께 설치하기 위해 xampp 라는 것을 설치하였는데 DB를 PostgreSQL로 연동하고, intellij 내에 apache 서버 built-in 실행 방법이 있어서 xampp 아래 php 서버만 사용하고 있다.
- intellij built-in 구동 방법을 사용할거면 굳이 xampp 설치 안하고, 필요 서버만 따로 따로 설치해서 사용해도 될 것 같다.


## 2. 프로젝트 구조 생성
```
> .htaccess : MVC 패턴을 위한 요청 URL 규칙 설정 파일. 
    (참고 -> https://nowonbun.tistory.com/587)
> index.php
> app
    └ config
    └ controllers
    └ models
    └ vendor
    └ views

- 참조 사이트 : https://freehoon.tistory.com/
```

## 3. 필요한 board 테이블 생성
```
-- Table: public.board

-- DROP TABLE public.board;

CREATE TABLE public.board
(
    id integer NOT NULL DEFAULT nextval('board_id_seq'::regclass),
    title character varying(30) COLLATE pg_catalog."default" NOT NULL,
    content text COLLATE pg_catalog."default" NOT NULL,
    writer character varying(30) COLLATE pg_catalog."default" NOT NULL,
    created timestamp with time zone,
    modified timestamp with time zone,
    CONSTRAINT board_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE public.board
    OWNER to postgres;

COMMENT ON TABLE public.board
    IS 'board';
```
