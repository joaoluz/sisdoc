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

-- object: public.user_id_user_seq | type: SEQUENCE --
CREATE SEQUENCE public.user_id_user_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.user_id_user_seq OWNER TO postgres;
-- ddl-end --

-- object: public.user | type: TABLE --
CREATE TABLE public.tb_user(
	id_user integer NOT NULL DEFAULT nextval('user_id_user_seq'::regclass),
	ds_email character varying(100),
	nu_cpf character varying(11),
	password character varying(50),
	login varchar(100),
	no_user varchar(100),
	CONSTRAINT "PK_user" PRIMARY KEY (id_user)

);
-- ddl-end --
ALTER TABLE public.tb_user OWNER TO postgres;
-- ddl-end --

-- object: public.system_id_system_seq | type: SEQUENCE --
CREATE SEQUENCE public.system_id_system_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.system_id_system_seq OWNER TO postgres;
-- ddl-end --

-- object: public.system | type: TABLE --
CREATE TABLE public.tb_system(
	id_system integer NOT NULL DEFAULT nextval('system_id_system_seq'::regclass),
	no_system character varying(45) NOT NULL,
	id_iteration integer,
	sg_iteration character varying(15),
	CONSTRAINT "PK_system" PRIMARY KEY (id_system)

);
-- ddl-end --
ALTER TABLE public.tb_system OWNER TO postgres;
-- ddl-end --

-- object: public.iteration_id_iteration_seq | type: SEQUENCE --
CREATE SEQUENCE public.iteration_id_iteration_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.iteration_id_iteration_seq OWNER TO postgres;
-- ddl-end --

-- object: public.iteration | type: TABLE --
CREATE TABLE public.tb_iteration(
	id_iteration integer NOT NULL DEFAULT nextval('iteration_id_iteration_seq'::regclass),
	no_iteration character varying(50) NOT NULL,
	CONSTRAINT "PK_iteration" PRIMARY KEY (id_iteration)

);
-- ddl-end --
ALTER TABLE public.tb_iteration OWNER TO postgres;
-- ddl-end --

-- object: public.step_id_step_seq | type: SEQUENCE --
CREATE SEQUENCE public.step_id_step_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.step_id_step_seq OWNER TO postgres;
-- ddl-end --

-- object: public.step | type: TABLE --
CREATE TABLE public.tb_step(
	id_step integer NOT NULL DEFAULT nextval('step_id_step_seq'::regclass),
	no_step character varying(50) NOT NULL,
	CONSTRAINT "PK_step" PRIMARY KEY (id_step)

);
-- ddl-end --
ALTER TABLE public.tb_step OWNER TO postgres;
-- ddl-end --

-- object: public.system_has_step | type: TABLE --
CREATE TABLE public.tb_system_has_step(
	id_system integer NOT NULL,
	id_step integer NOT NULL
);
-- ddl-end --
ALTER TABLE public.tb_system_has_step OWNER TO postgres;
-- ddl-end --

-- object: public.template_document_id_template_document_seq | type: SEQUENCE --
CREATE SEQUENCE public.template_document_id_template_document_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.template_document_id_template_document_seq OWNER TO postgres;
-- ddl-end --

-- object: public.template_document | type: TABLE --
CREATE TABLE public.tb_template_document(
	id_template_document integer NOT NULL DEFAULT nextval('template_document_id_template_document_seq'::regclass),
	no_template_document character varying(50),
	nu_version integer,
	CONSTRAINT "PK_template_document" PRIMARY KEY (id_template_document)

);
-- ddl-end --
ALTER TABLE public.tb_template_document OWNER TO postgres;
-- ddl-end --

-- object: public.document_id_document_seq | type: SEQUENCE --
CREATE SEQUENCE public.document_id_document_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.document_id_document_seq OWNER TO postgres;
-- ddl-end --

-- object: public.document | type: TABLE --
CREATE TABLE public.tb_document(
	id_document integer NOT NULL DEFAULT nextval('document_id_document_seq'::regclass),
	no_document character varying(100) NOT NULL,
	nu_version integer,
	id_client integer,
	nu_document integer,
	id_historical integer,
	id_reference integer,
	id_message integer,
	id_signing integer,
	id_template_document integer,
	CONSTRAINT "PK_document" PRIMARY KEY (id_document)

);
-- ddl-end --
ALTER TABLE public.tb_document OWNER TO postgres;
-- ddl-end --

-- object: public.client_id_client_seq | type: SEQUENCE --
CREATE SEQUENCE public.client_id_client_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.client_id_client_seq OWNER TO postgres;
-- ddl-end --

-- object: public.client | type: TABLE --
CREATE TABLE public.tb_client(
	id_client integer NOT NULL DEFAULT nextval('client_id_client_seq'::regclass),
	no_client character varying(100),
	id_system integer,
	CONSTRAINT "PK_client" PRIMARY KEY (id_client)

);
-- ddl-end --
ALTER TABLE public.tb_client OWNER TO postgres;
-- ddl-end --

-- object: public.cover_id_cover_seq | type: SEQUENCE --
CREATE SEQUENCE public.cover_id_cover_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.cover_id_cover_seq OWNER TO postgres;
-- ddl-end --

-- object: public.cover | type: TABLE --
CREATE TABLE public.tb_cover(
	id_cover integer NOT NULL DEFAULT nextval('cover_id_cover_seq'::regclass),
	no_cover character varying(50),
	id_document integer,
	nu_version integer,
	id_historical integer,
	CONSTRAINT "PK_cover" PRIMARY KEY (id_cover)

);
-- ddl-end --
ALTER TABLE public.tb_cover OWNER TO postgres;
-- ddl-end --

-- object: public.historical_id_historical_seq | type: SEQUENCE --
CREATE SEQUENCE public.historical_id_historical_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.historical_id_historical_seq OWNER TO postgres;
-- ddl-end --

-- object: public.historical | type: TABLE --
CREATE TABLE public.tb_historical(
	id_historical integer NOT NULL DEFAULT nextval('historical_id_historical_seq'::regclass),
	nu_version integer,
	dt_version date,
	dt_historical date,
	CONSTRAINT "PK_historical" PRIMARY KEY (id_historical)

);
-- ddl-end --
ALTER TABLE public.tb_historical OWNER TO postgres;
-- ddl-end --

-- object: public.reference_id_reference_seq | type: SEQUENCE --
CREATE SEQUENCE public.reference_id_reference_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.reference_id_reference_seq OWNER TO postgres;
-- ddl-end --

-- object: public.reference | type: TABLE --
CREATE TABLE public.tb_reference(
	id_reference integer NOT NULL DEFAULT nextval('reference_id_reference_seq'::regclass),
	no_reference character varying(50),
	dt_version date,
	CONSTRAINT "PK_reference" PRIMARY KEY (id_reference)

);
-- ddl-end --
ALTER TABLE public.tb_reference OWNER TO postgres;
-- ddl-end --

-- object: public.signing_id_signing_seq | type: SEQUENCE --
CREATE SEQUENCE public.signing_id_signing_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.signing_id_signing_seq OWNER TO postgres;
-- ddl-end --

-- object: public.signing | type: TABLE --
CREATE TABLE public.tb_signing(
	id_signing integer NOT NULL DEFAULT nextval('signing_id_signing_seq'::regclass),
	no_signing character varying(50),
	no_role character varying(50),
	no_sector character varying(50),
	CONSTRAINT "PK_signing" PRIMARY KEY (id_signing)

);
-- ddl-end --
ALTER TABLE public.tb_signing OWNER TO postgres;
-- ddl-end --

-- object: public.message_id_message_seq | type: SEQUENCE --
CREATE SEQUENCE public.message_id_message_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.message_id_message_seq OWNER TO postgres;
-- ddl-end --

-- object: public.message | type: TABLE --
CREATE TABLE public.tb_message(
	id_message integer NOT NULL DEFAULT nextval('message_id_message_seq'::regclass),
	ds_message character varying(200),
	co_message character varying(20),
	id_type_message integer,
	CONSTRAINT "PK_message" PRIMARY KEY (id_message)

);
-- ddl-end --
ALTER TABLE public.tb_message OWNER TO postgres;
-- ddl-end --

-- object: public.type_message_id_type_message_seq | type: SEQUENCE --
CREATE SEQUENCE public.type_message_id_type_message_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 9223372036854775807
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
ALTER SEQUENCE public.type_message_id_type_message_seq OWNER TO postgres;
-- ddl-end --

-- object: public.type_message | type: TABLE --
CREATE TABLE public.tb_type_message(
	id_type_message integer NOT NULL DEFAULT nextval('type_message_id_type_message_seq'::regclass),
	no_type_message character varying(30),
	CONSTRAINT "PK_type_message" PRIMARY KEY (id_type_message)

);
-- ddl-end --
ALTER TABLE public.tb_type_message OWNER TO postgres;
-- ddl-end --

-- object: public.roles | type: TABLE --
CREATE TABLE public.tb_roles(
	id_role serial NOT NULL,
	no_role varchar(30) NOT NULL,
	ds_identifier varchar(30) NOT NULL,
	dt_create date NOT NULL,
	CONSTRAINT pk_roles PRIMARY KEY (id_role)

);
-- ddl-end --
-- object: public.user_role | type: TABLE --
CREATE TABLE public.tb_user_role(
	id_user_role serial NOT NULL,
	id_user integer NOT NULL,
	id_role integer NOT NULL,
	CONSTRAINT pk_user_role PRIMARY KEY (id_user_role)

);
-- ddl-end --
COMMENT ON TABLE public.tb_user_role IS 'Tabela que vinculo as permissões ao user';

-- object: "FK_system" | type: CONSTRAINT --
--REFERENCES public.system (id_system) MATCH FULL
--ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_iteration" | type: CONSTRAINT --
ALTER TABLE public.tb_system ADD CONSTRAINT "FK_iteration" FOREIGN KEY (id_iteration)
REFERENCES public.tb_iteration (id_iteration) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_step" | type: CONSTRAINT --
ALTER TABLE public.tb_system_has_step ADD CONSTRAINT "FK_step" FOREIGN KEY (id_step)
REFERENCES public.tb_step (id_step) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_system" | type: CONSTRAINT --
ALTER TABLE public.tb_system_has_step ADD CONSTRAINT "FK_system" FOREIGN KEY (id_system)
REFERENCES public.tb_system (id_system) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_template_document" | type: CONSTRAINT --
ALTER TABLE public.tb_document ADD CONSTRAINT "FK_template_document" FOREIGN KEY (id_template_document)
REFERENCES public.tb_template_document (id_template_document) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_client" | type: CONSTRAINT --
ALTER TABLE public.tb_document ADD CONSTRAINT "FK_client" FOREIGN KEY (id_client)
REFERENCES public.tb_client (id_client) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_reference" | type: CONSTRAINT --
ALTER TABLE public.tb_document ADD CONSTRAINT "FK_reference" FOREIGN KEY (id_reference)
REFERENCES public.tb_reference (id_reference) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_signing" | type: CONSTRAINT --
ALTER TABLE public.tb_document ADD CONSTRAINT "FK_signing" FOREIGN KEY (id_signing)
REFERENCES public.tb_signing (id_signing) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_historical" | type: CONSTRAINT --
ALTER TABLE public.tb_document ADD CONSTRAINT "FK_historical" FOREIGN KEY (id_historical)
REFERENCES public.tb_historical (id_historical) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_message" | type: CONSTRAINT --
ALTER TABLE public.tb_document ADD CONSTRAINT "FK_message" FOREIGN KEY (id_message)
REFERENCES public.tb_message (id_message) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_system" | type: CONSTRAINT --
ALTER TABLE public.tb_client ADD CONSTRAINT "FK_system" FOREIGN KEY (id_system)
REFERENCES public.tb_system (id_system) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_document" | type: CONSTRAINT --
ALTER TABLE public.tb_cover ADD CONSTRAINT "FK_document" FOREIGN KEY (id_document)
REFERENCES public.tb_document (id_document) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_historical" | type: CONSTRAINT --
ALTER TABLE public.tb_cover ADD CONSTRAINT "FK_historical" FOREIGN KEY (id_historical)
REFERENCES public.tb_historical (id_historical) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: "FK_type_message" | type: CONSTRAINT --
ALTER TABLE public.tb_message ADD CONSTRAINT "FK_type_message" FOREIGN KEY (id_type_message)
REFERENCES public.tb_type_message (id_type_message) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_role | type: CONSTRAINT --
ALTER TABLE public.tb_user_role ADD CONSTRAINT fk_role FOREIGN KEY (id_role)
REFERENCES public.tb_roles (id_role) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --


-- object: fk_user | type: CONSTRAINT --
ALTER TABLE public.tb_user_role ADD CONSTRAINT fk_user FOREIGN KEY (id_user)
REFERENCES public.tb_user (id_user) MATCH FULL
ON DELETE NO ACTION ON UPDATE NO ACTION NOT DEFERRABLE;
-- ddl-end --



