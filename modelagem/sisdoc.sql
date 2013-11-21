-- Database generated with pgModeler (PostgreSQL Database Modeler).
-- PostgreSQL version: 9.3
-- Project Site: pgmodeler.com.br
-- Model Author: ---

SET check_function_bodies = false;
-- ddl-end --


-- Database creation must be done outside an multicommand file.
-- These commands were put in this file only for convenience.
-- -- object: sisdoc | type: DATABASE --
-- CREATE DATABASE sisdoc
-- 	ENCODING = 'UTF8'
-- 	LC_COLLATE = 'pt_BR.UTF8'
-- 	LC_CTYPE = 'pt_BR.UTF8'
-- 	TABLESPACE = pg_default
-- 	OWNER = postgres
-- ;
-- -- ddl-end --
-- 

-- object: public.usuario_id_usuario_seq | type: SEQUENCE --
CREATE SEQUENCE public.usuario_id_usuario_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.usuario_id_usuario_seq OWNER TO postgres;
-- ddl-end --

-- object: public.usuario | type: TABLE --
CREATE TABLE public.usuario(
	id_usuario integer NOT NULL DEFAULT nextval('usuario_id_usuario_seq'::regclass),
	ds_email character varying(100),
	nu_cpf character varying(11),
	password character varying(50),
	login varchar(100),
	CONSTRAINT "PK_usuario" PRIMARY KEY (id_usuario)

);
-- ddl-end --
ALTER TABLE public.usuario OWNER TO postgres;
-- ddl-end --

-- object: public.usuario_has_perfil | type: TABLE --
CREATE TABLE public.usuario_has_perfil(
	id_usuario integer NOT NULL,
	id_perfil integer NOT NULL
);
-- ddl-end --
ALTER TABLE public.usuario_has_perfil OWNER TO postgres;
-- ddl-end --

-- object: public.perfil_id_perfil_seq | type: SEQUENCE --
CREATE SEQUENCE public.perfil_id_perfil_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.perfil_id_perfil_seq OWNER TO postgres;
-- ddl-end --

-- object: public.perfil | type: TABLE --
CREATE TABLE public.perfil(
	id_perfil integer NOT NULL DEFAULT nextval('perfil_id_perfil_seq'::regclass),
	ds_cargo character varying(45),
	ds_perfil character varying(50),
	ds_senioridade character varying(30),
	CONSTRAINT "PK_perfil" PRIMARY KEY (id_perfil)

);
-- ddl-end --
ALTER TABLE public.perfil OWNER TO postgres;
-- ddl-end --

-- object: public.perfil_has_sistema | type: TABLE --
CREATE TABLE public.perfil_has_sistema(
	id_perfil integer NOT NULL,
	id_sistema integer NOT NULL
);
-- ddl-end --
ALTER TABLE public.perfil_has_sistema OWNER TO postgres;
-- ddl-end --

-- object: public.sistema_id_sistema_seq | type: SEQUENCE --
CREATE SEQUENCE public.sistema_id_sistema_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.sistema_id_sistema_seq OWNER TO postgres;
-- ddl-end --

-- object: public.sistema | type: TABLE --
CREATE TABLE public.sistema(
	id_sistema integer NOT NULL DEFAULT nextval('sistema_id_sistema_seq'::regclass),
	no_sistema character varying(45) NOT NULL,
	id_iteracao integer,
	sg_iteracao character varying(15),
	CONSTRAINT "PK_sistema" PRIMARY KEY (id_sistema)

);
-- ddl-end --
ALTER TABLE public.sistema OWNER TO postgres;
-- ddl-end --

-- object: public.iteracao_id_iteracao_seq | type: SEQUENCE --
CREATE SEQUENCE public.iteracao_id_iteracao_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.iteracao_id_iteracao_seq OWNER TO postgres;
-- ddl-end --

-- object: public.iteracao | type: TABLE --
CREATE TABLE public.iteracao(
	id_iteracao integer NOT NULL DEFAULT nextval('iteracao_id_iteracao_seq'::regclass),
	no_iteracao character varying(50) NOT NULL,
	CONSTRAINT "PK_iteracao" PRIMARY KEY (id_iteracao)

);
-- ddl-end --
ALTER TABLE public.iteracao OWNER TO postgres;
-- ddl-end --

-- object: public.fase_id_fase_seq | type: SEQUENCE --
CREATE SEQUENCE public.fase_id_fase_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.fase_id_fase_seq OWNER TO postgres;
-- ddl-end --

-- object: public.fase | type: TABLE --
CREATE TABLE public.fase(
	id_fase integer NOT NULL DEFAULT nextval('fase_id_fase_seq'::regclass),
	no_fase character varying(50) NOT NULL,
	CONSTRAINT "PK_fase" PRIMARY KEY (id_fase)

);
-- ddl-end --
ALTER TABLE public.fase OWNER TO postgres;
-- ddl-end --

-- object: public.sistema_has_fase | type: TABLE --
CREATE TABLE public.sistema_has_fase(
	id_sistema integer NOT NULL,
	id_fase integer NOT NULL
);
-- ddl-end --
ALTER TABLE public.sistema_has_fase OWNER TO postgres;
-- ddl-end --

-- object: public.modelo_documento_id_modelo_documento_seq | type: SEQUENCE --
CREATE SEQUENCE public.modelo_documento_id_modelo_documento_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.modelo_documento_id_modelo_documento_seq OWNER TO postgres;
-- ddl-end --

-- object: public.modelo_documento | type: TABLE --
CREATE TABLE public.modelo_documento(
	id_modelo_documento integer NOT NULL DEFAULT nextval('modelo_documento_id_modelo_documento_seq'::regclass),
	no_modelo_documento character varying(50),
	nu_versao integer,
	CONSTRAINT "PK_modelo_documento" PRIMARY KEY (id_modelo_documento)

);
-- ddl-end --
ALTER TABLE public.modelo_documento OWNER TO postgres;
-- ddl-end --

-- object: public.documento_id_documento_seq | type: SEQUENCE --
CREATE SEQUENCE public.documento_id_documento_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.documento_id_documento_seq OWNER TO postgres;
-- ddl-end --

-- object: public.documento | type: TABLE --
CREATE TABLE public.documento(
	id_documento integer NOT NULL DEFAULT nextval('documento_id_documento_seq'::regclass),
	no_documento character varying(100) NOT NULL,
	nu_versao integer,
	id_cliente integer,
	nu_documento integer,
	id_historico integer,
	id_referencia integer,
	id_mensagem integer,
	id_assinatura integer,
	id_modelo_documento integer,
	CONSTRAINT "PK_documento" PRIMARY KEY (id_documento)

);
-- ddl-end --
ALTER TABLE public.documento OWNER TO postgres;
-- ddl-end --

-- object: public.cliente_id_cliente_seq | type: SEQUENCE --
CREATE SEQUENCE public.cliente_id_cliente_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.cliente_id_cliente_seq OWNER TO postgres;
-- ddl-end --

-- object: public.cliente | type: TABLE --
CREATE TABLE public.cliente(
	id_cliente integer NOT NULL DEFAULT nextval('cliente_id_cliente_seq'::regclass),
	no_cliente character varying(100),
	id_sistema integer,
	CONSTRAINT "PK_cliente" PRIMARY KEY (id_cliente)

);
-- ddl-end --
ALTER TABLE public.cliente OWNER TO postgres;
-- ddl-end --

-- object: public.capa_id_capa_seq | type: SEQUENCE --
CREATE SEQUENCE public.capa_id_capa_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.capa_id_capa_seq OWNER TO postgres;
-- ddl-end --

-- object: public.capa | type: TABLE --
CREATE TABLE public.capa(
	id_capa integer NOT NULL DEFAULT nextval('capa_id_capa_seq'::regclass),
	no_capa character varying(50),
	id_documento integer,
	nu_versao integer,
	id_historico integer,
	CONSTRAINT "PK_capa" PRIMARY KEY (id_capa)

);
-- ddl-end --
ALTER TABLE public.capa OWNER TO postgres;
-- ddl-end --

-- object: public.historico_id_historico_seq | type: SEQUENCE --
CREATE SEQUENCE public.historico_id_historico_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.historico_id_historico_seq OWNER TO postgres;
-- ddl-end --

-- object: public.historico | type: TABLE --
CREATE TABLE public.historico(
	id_historico integer NOT NULL DEFAULT nextval('historico_id_historico_seq'::regclass),
	nu_versao integer,
	dt_versao date,
	dt_historico date,
	CONSTRAINT "PK_historico" PRIMARY KEY (id_historico)

);
-- ddl-end --
ALTER TABLE public.historico OWNER TO postgres;
-- ddl-end --

-- object: public.referencia_id_referencia_seq | type: SEQUENCE --
CREATE SEQUENCE public.referencia_id_referencia_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.referencia_id_referencia_seq OWNER TO postgres;
-- ddl-end --

-- object: public.referencia | type: TABLE --
CREATE TABLE public.referencia(
	id_referencia integer NOT NULL DEFAULT nextval('referencia_id_referencia_seq'::regclass),
	no_referencia character varying(50),
	dt_versao date,
	CONSTRAINT "PK_referencia" PRIMARY KEY (id_referencia)

);
-- ddl-end --
ALTER TABLE public.referencia OWNER TO postgres;
-- ddl-end --

-- object: public.assinatura_id_assinatura_seq | type: SEQUENCE --
CREATE SEQUENCE public.assinatura_id_assinatura_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.assinatura_id_assinatura_seq OWNER TO postgres;
-- ddl-end --

-- object: public.assinatura | type: TABLE --
CREATE TABLE public.assinatura(
	id_assinatura integer NOT NULL DEFAULT nextval('assinatura_id_assinatura_seq'::regclass),
	no_assinatura character varying(50),
	no_cargo character varying(50),
	no_setor character varying(50),
	CONSTRAINT "PK_assinatura" PRIMARY KEY (id_assinatura)

);
-- ddl-end --
ALTER TABLE public.assinatura OWNER TO postgres;
-- ddl-end --

-- object: public.mensagem_id_mensagem_seq | type: SEQUENCE --
CREATE SEQUENCE public.mensagem_id_mensagem_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.mensagem_id_mensagem_seq OWNER TO postgres;
-- ddl-end --

-- object: public.mensagem | type: TABLE --
CREATE TABLE public.mensagem(
	id_mensagem integer NOT NULL DEFAULT nextval('mensagem_id_mensagem_seq'::regclass),
	ds_mensagem character varying(200),
	co_mensagem character varying(20),
	id_tipo_mensagem integer,
	CONSTRAINT "PK_mensagem" PRIMARY KEY (id_mensagem)

);
-- ddl-end --
ALTER TABLE public.mensagem OWNER TO postgres;
-- ddl-end --

-- object: public.tipo_mensagem_id_tipo_mensagem_seq | type: SEQUENCE --
CREATE SEQUENCE public.tipo_mensagem_id_tipo_mensagem_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.tipo_mensagem_id_tipo_mensagem_seq OWNER TO postgres;
-- ddl-end --

-- object: public.tipo_mensagem | type: TABLE --
CREATE TABLE public.tipo_mensagem(
	id_tipo_mensagem integer NOT NULL DEFAULT nextval('tipo_mensagem_id_tipo_mensagem_seq'::regclass),
	no_tipo_mensagem character varying(30),
	CONSTRAINT "PK_tipo_mensagem" PRIMARY KEY (id_tipo_mensagem)

);
-- ddl-end --
ALTER TABLE public.tipo_mensagem OWNER TO postgres;
-- ddl-end --

-- object: public.papeis | type: TABLE --
CREATE TABLE public.papeis(
	id_papel serial NOT NULL,
	no_papel varchar(30) NOT NULL,
	ds_identificador varchar(30) NOT NULL,
	dt_criacao date NOT NULL,
	CONSTRAINT pk_papeis PRIMARY KEY (id_papel)

);
-- ddl-end --
-- object: public.usuario_papel | type: TABLE --
CREATE TABLE public.usuario_papel(
	id_usuario_papel serial NOT NULL,
	id_usuario integer NOT NULL,
	id_papel integer NOT NULL,
	CONSTRAINT pk_usuario_papel PRIMARY KEY (id_usuario_papel)

);
-- ddl-end --
COMMENT ON TABLE public.usuario_papel IS 'Tabela que vinculo as permissões ao usuario';
-- ddl-end --
-- ddl-end --

-- object: "FK_id_usuario" | type: CONSTRAINT --
ALTER TABLE public.usuario_has_perfil ADD CONSTRAINT "FK_id_usuario" FOREIGN KEY (id_usuario)
REFERENCES public.usuario (id_usuario) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_perfil" | type: CONSTRAINT --
ALTER TABLE public.usuario_has_perfil ADD CONSTRAINT "FK_perfil" FOREIGN KEY (id_perfil)
REFERENCES public.perfil (id_perfil) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "PK_perfil" | type: CONSTRAINT --
ALTER TABLE public.perfil_has_sistema ADD CONSTRAINT "PK_perfil" FOREIGN KEY (id_perfil)
REFERENCES public.perfil (id_perfil) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_sistema" | type: CONSTRAINT --
ALTER TABLE public.perfil_has_sistema ADD CONSTRAINT "FK_sistema" FOREIGN KEY (id_sistema)
REFERENCES public.sistema (id_sistema) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_iteracao" | type: CONSTRAINT --
ALTER TABLE public.sistema ADD CONSTRAINT "FK_iteracao" FOREIGN KEY (id_iteracao)
REFERENCES public.iteracao (id_iteracao) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_fase" | type: CONSTRAINT --
ALTER TABLE public.sistema_has_fase ADD CONSTRAINT "FK_fase" FOREIGN KEY (id_fase)
REFERENCES public.fase (id_fase) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_sistema" | type: CONSTRAINT --
ALTER TABLE public.sistema_has_fase ADD CONSTRAINT "FK_sistema" FOREIGN KEY (id_sistema)
REFERENCES public.sistema (id_sistema) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_modelo_documento" | type: CONSTRAINT --
ALTER TABLE public.documento ADD CONSTRAINT "FK_modelo_documento" FOREIGN KEY (id_modelo_documento)
REFERENCES public.modelo_documento (id_modelo_documento) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_cliente" | type: CONSTRAINT --
ALTER TABLE public.documento ADD CONSTRAINT "FK_cliente" FOREIGN KEY (id_cliente)
REFERENCES public.cliente (id_cliente) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_referencia" | type: CONSTRAINT --
ALTER TABLE public.documento ADD CONSTRAINT "FK_referencia" FOREIGN KEY (id_referencia)
REFERENCES public.referencia (id_referencia) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_assinatura" | type: CONSTRAINT --
ALTER TABLE public.documento ADD CONSTRAINT "FK_assinatura" FOREIGN KEY (id_assinatura)
REFERENCES public.assinatura (id_assinatura) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_historico" | type: CONSTRAINT --
ALTER TABLE public.documento ADD CONSTRAINT "FK_historico" FOREIGN KEY (id_historico)
REFERENCES public.historico (id_historico) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_mensagem" | type: CONSTRAINT --
ALTER TABLE public.documento ADD CONSTRAINT "FK_mensagem" FOREIGN KEY (id_mensagem)
REFERENCES public.mensagem (id_mensagem) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_sistema" | type: CONSTRAINT --
ALTER TABLE public.cliente ADD CONSTRAINT "FK_sistema" FOREIGN KEY (id_sistema)
REFERENCES public.sistema (id_sistema) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_documento" | type: CONSTRAINT --
ALTER TABLE public.capa ADD CONSTRAINT "FK_documento" FOREIGN KEY (id_documento)
REFERENCES public.documento (id_documento) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_historico" | type: CONSTRAINT --
ALTER TABLE public.capa ADD CONSTRAINT "FK_historico" FOREIGN KEY (id_historico)
REFERENCES public.historico (id_historico) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_tipo_mensagem" | type: CONSTRAINT --
ALTER TABLE public.mensagem ADD CONSTRAINT "FK_tipo_mensagem" FOREIGN KEY (id_tipo_mensagem)
REFERENCES public.tipo_mensagem (id_tipo_mensagem) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_papel | type: CONSTRAINT --
ALTER TABLE public.usuario_papel ADD CONSTRAINT fk_papel FOREIGN KEY (id_papel)
REFERENCES public.papeis (id_papel) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_usuario | type: CONSTRAINT --
ALTER TABLE public.usuario_papel ADD CONSTRAINT fk_usuario FOREIGN KEY (id_usuario)
REFERENCES public.usuario (id_usuario) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --



