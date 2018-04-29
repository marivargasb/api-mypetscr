class CreatePlaces < ActiveRecord::Migration[5.1]
  def change
    create_table :places do |t|
      t.string :nombre
      t.string :correo
      t.string :web
      t.string :telefono
      t.string :categoria
      t.string :provincia
      t.string :direccion
      t.string :descripcion
      t.string :foto
      t.string :estado
      t.string :user_id

      t.timestamps
    end
  end
end
