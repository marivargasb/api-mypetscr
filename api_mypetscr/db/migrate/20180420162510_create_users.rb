class CreateUsers < ActiveRecord::Migration[5.1]
  def change
    create_table :users do |t|
      t.string :nombre
      t.string :apellido
      t.string :apellido2
      t.string :username
      t.string :password
      t.string :nacimiento
      t.string :estado
      t.string :tipo
      t.string :imagen

      t.timestamps
    end
  end
end
