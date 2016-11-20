<?php

namespace Mosaiqo\Cqrs\Contracts;

interface EventStore
{
	/**
	 * @param AggregateIdentity $aggregateIdentity
	 * @param Collection $events
	 * @return mixed
	 * @author Boudy de Geer <boudydegeer@mosaiqo.com>
	 */
	public static function persistAllFor(AggregateIdentity $aggregateIdentity, Collection $events);

	/**
	 * @param AggregateIdentity $aggregateIdentity
	 * @param DomainEvent $event
	 * @return mixed
	 */
	public function persist(AggregateIdentity $aggregateIdentity, DomainEvent $event);

	/**
	 * @param $eventId
	 * @return mixed
	 */
	public function allStoredEventsSince($eventId);
}