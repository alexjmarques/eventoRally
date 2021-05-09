<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190717141031 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE evento ADD slug VARCHAR(255) NOT NULL, ADD imagem VARCHAR(255) NOT NULL, ADD vagas VARCHAR(2) NOT NULL, CHANGE descricao_curta descricao_curta LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE admin CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE dados_medicos CHANGE nome_plano_saude nome_plano_saude VARCHAR(60) DEFAULT NULL, CHANGE telefone_plano_saude telefone_plano_saude VARCHAR(15) DEFAULT NULL');
        $this->addSql('ALTER TABLE dados_profissionais CHANGE empresa empresa VARCHAR(100) DEFAULT NULL, CHANGE ramo_de_atividade ramo_de_atividade VARCHAR(90) DEFAULT NULL, CHANGE funcao funcao VARCHAR(50) DEFAULT NULL, CHANGE email email VARCHAR(180) DEFAULT NULL, CHANGE telefone telefone VARCHAR(16) DEFAULT NULL');
        $this->addSql('ALTER TABLE usuario_evento CHANGE data_pagamento data_pagamento DATETIME DEFAULT NULL, CHANGE status_pagamento status_pagamento VARCHAR(255) DEFAULT NULL, CHANGE code_pagamento code_pagamento VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE cliente CHANGE dados_profissionais_id dados_profissionais_id INT DEFAULT NULL, CHANGE dados_medicos_id dados_medicos_id INT DEFAULT NULL, CHANGE dados_veiculo_id dados_veiculo_id INT DEFAULT NULL, CHANGE roles roles JSON NOT NULL, CHANGE sobrenome sobrenome VARCHAR(150) DEFAULT NULL, CHANGE complemento complemento VARCHAR(40) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE admin CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin');
        $this->addSql('ALTER TABLE cliente CHANGE dados_profissionais_id dados_profissionais_id INT DEFAULT NULL, CHANGE dados_medicos_id dados_medicos_id INT DEFAULT NULL, CHANGE dados_veiculo_id dados_veiculo_id INT DEFAULT NULL, CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin, CHANGE sobrenome sobrenome VARCHAR(150) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE complemento complemento VARCHAR(40) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE dados_medicos CHANGE nome_plano_saude nome_plano_saude VARCHAR(60) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE telefone_plano_saude telefone_plano_saude VARCHAR(15) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE dados_profissionais CHANGE empresa empresa VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE ramo_de_atividade ramo_de_atividade VARCHAR(90) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE funcao funcao VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE email email VARCHAR(180) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE telefone telefone VARCHAR(16) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE evento DROP slug, DROP imagem, DROP vagas, CHANGE descricao_curta descricao_curta VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE usuario_evento CHANGE data_pagamento data_pagamento DATETIME DEFAULT \'NULL\', CHANGE status_pagamento status_pagamento VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE code_pagamento code_pagamento VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
