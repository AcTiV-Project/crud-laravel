public function up()
{
    Schema::create('empleados', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('cargo');
        $table->decimal('salario', 10, 2);
        $table->timestamps();
    });
}
