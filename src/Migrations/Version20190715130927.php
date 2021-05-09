<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190715130927 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE IF NOT EXISTS  evento (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(255) NOT NULL, data DATE NOT NULL, local_partida VARCHAR(255) NOT NULL, local_chegada VARCHAR(255) NOT NULL, pais VARCHAR(60) NOT NULL, descricao_longa LONGTEXT NOT NULL, descricao_curta VARCHAR(255) NOT NULL, valor DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS  admin (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_880E0D76E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS  contato (id INT AUTO_INCREMENT NOT NULL, dados_medicos_id INT NOT NULL, nome VARCHAR(150) NOT NULL, grau_parentesco VARCHAR(30) NOT NULL, telefone VARCHAR(15) NOT NULL, INDEX IDX_C384AB42F3840385 (dados_medicos_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS  dados_veiculo (id INT AUTO_INCREMENT NOT NULL, ano_fabricacao VARCHAR(4) NOT NULL, marca VARCHAR(50) NOT NULL, modelo VARCHAR(25) NOT NULL, placa VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS  dados_medicos (id INT AUTO_INCREMENT NOT NULL, tipo_sanguineo VARCHAR(3) NOT NULL, possui_alergia TINYINT(1) NOT NULL, possui_doenca TINYINT(1) NOT NULL, toma_medicamento TINYINT(1) NOT NULL, nome_plano_saude VARCHAR(60) DEFAULT NULL, telefone_plano_saude VARCHAR(15) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS  dados_profissionais (id INT AUTO_INCREMENT NOT NULL, empresa VARCHAR(100) DEFAULT NULL, ramo_de_atividade VARCHAR(90) DEFAULT NULL, funcao VARCHAR(50) DEFAULT NULL, email VARCHAR(180) DEFAULT NULL, telefone VARCHAR(16) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS  usuario_evento (id INT AUTO_INCREMENT NOT NULL, evento_id INT NOT NULL, cliente_id INT NOT NULL, data_pagamento DATETIME DEFAULT NULL, status_pagamento VARCHAR(255) DEFAULT NULL, code_pagamento VARCHAR(255) DEFAULT NULL, INDEX IDX_BD94E80C87A5F842 (evento_id), INDEX IDX_BD94E80CDE734E51 (cliente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS  cliente (id INT AUTO_INCREMENT NOT NULL, dados_profissionais_id INT DEFAULT NULL, dados_medicos_id INT DEFAULT NULL, dados_veiculo_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nome VARCHAR(150) NOT NULL, sobrenome VARCHAR(150) DEFAULT NULL, apelido VARCHAR(30) NOT NULL, data_nascimento DATE NOT NULL, rg VARCHAR(20) NOT NULL, cpf VARCHAR(15) NOT NULL, cnh VARCHAR(11) NOT NULL, sexo VARCHAR(9) NOT NULL, telefone_residencial VARCHAR(15) NOT NULL, telefone_celular VARCHAR(15) NOT NULL, endereco VARCHAR(100) NOT NULL, numero VARCHAR(15) NOT NULL, complemento VARCHAR(40) DEFAULT NULL, bairro VARCHAR(50) NOT NULL, cep VARCHAR(10) NOT NULL, cidade VARCHAR(60) NOT NULL, estado VARCHAR(50) NOT NULL, UNIQUE INDEX UNIQ_F41C9B25E7927C74 (email), UNIQUE INDEX UNIQ_F41C9B25F30F3BD8 (dados_profissionais_id), UNIQUE INDEX UNIQ_F41C9B25F3840385 (dados_medicos_id), UNIQUE INDEX UNIQ_F41C9B259B5F4074 (dados_veiculo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contato ADD CONSTRAINT FK_C384AB42F3840385 FOREIGN KEY (dados_medicos_id) REFERENCES dados_medicos (id)');
        $this->addSql('ALTER TABLE usuario_evento ADD CONSTRAINT FK_BD94E80C87A5F842 FOREIGN KEY (evento_id) REFERENCES evento (id)');
        $this->addSql('ALTER TABLE usuario_evento ADD CONSTRAINT FK_BD94E80CDE734E51 FOREIGN KEY (cliente_id) REFERENCES cliente (id)');
        $this->addSql('ALTER TABLE cliente ADD CONSTRAINT FK_F41C9B25F30F3BD8 FOREIGN KEY (dados_profissionais_id) REFERENCES dados_profissionais (id)');
        $this->addSql('ALTER TABLE cliente ADD CONSTRAINT FK_F41C9B25F3840385 FOREIGN KEY (dados_medicos_id) REFERENCES dados_medicos (id)');
        $this->addSql('ALTER TABLE cliente ADD CONSTRAINT FK_F41C9B259B5F4074 FOREIGN KEY (dados_veiculo_id) REFERENCES dados_veiculo (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE usuario_evento DROP FOREIGN KEY FK_BD94E80C87A5F842');
        $this->addSql('ALTER TABLE cliente DROP FOREIGN KEY FK_F41C9B259B5F4074');
        $this->addSql('ALTER TABLE contato DROP FOREIGN KEY FK_C384AB42F3840385');
        $this->addSql('ALTER TABLE cliente DROP FOREIGN KEY FK_F41C9B25F3840385');
        $this->addSql('ALTER TABLE cliente DROP FOREIGN KEY FK_F41C9B25F30F3BD8');
        $this->addSql('ALTER TABLE usuario_evento DROP FOREIGN KEY FK_BD94E80CDE734E51');
        $this->addSql('DROP TABLE evento');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE contato');
        $this->addSql('DROP TABLE dados_veiculo');
        $this->addSql('DROP TABLE dados_medicos');
        $this->addSql('DROP TABLE dados_profissionais');
        $this->addSql('DROP TABLE usuario_evento');
        $this->addSql('DROP TABLE cliente');
    }
}
